<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Enums\CarEnum;

class Fipe extends Model
{
    use HasFactory;


    protected function FipeJson($resource, $data = null)
    {
        $url = "http://veiculos.fipe.org.br/api/veiculos";

        $header = [
            "Cache-Control: no-cache",
            "Content-Type: application/json",
            "Host: veiculos.fipe.org.br",
            "Referer: http://veiculos.fipe.org.br"
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . "/" . $resource);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $output = curl_exec($ch);
        curl_close($ch);

        return json_encode($output);
    }

    public function getReference()
    {
        $tabela_referencia = $this->FipeJson("ConsultarTabelaDeReferencia");
        $reference = json_decode(json_decode($tabela_referencia), true);
        return $reference[0]['Codigo'];
    }

    public function getBrands()
    {
        $arrMarcas = $this->FipeJson("ConsultarMarcas", array(
            "codigoTabelaReferencia" => $this->getReference(),
            "codigoTipoVeiculo" => 1
        ));
        $this->convertToBrand(json_decode(json_decode($arrMarcas), true));
    }

    public function convertToBrand($arrayBrand)
    {
        foreach ($arrayBrand as $brand) {
            $brands = Brand::create(['name' => $brand['Label'], 'fipe_id' => $brand['Value'], 'status'=>'INCOMPLETED']);
        }
    }

    public function getVehicles()
    {
        $countBrand = Brand::count();
        for ($i = 0; $i <= 20; $i++) { 
            $marca = Brand::where('status', '=', 'INCOMPLETED')->first();

            $modelos = $this->FipeJson("ConsultarModelos", array(
                "codigoTabelaReferencia" => $this->getReference(),
                "codigoTipoVeiculo" => 1,
                "codigoMarca" => $marca['fipe_id'],
            ));
            $arrModelos = json_decode(json_decode($modelos), true);

            if (!empty($arrModelos['Modelos'])) {


                foreach ($arrModelos['Modelos'] as $models) {
                    $brands = Vehicle::create(['name' => $models['Label'], 'brand_id' => $marca['id'], 'fipe_id' => $models['Value']]);
                }
            }
            $re = Brand::where('id', $marca['id'])->update(['status' => 'COMPLETED']);
        }
    }

    public function getVehiclesYear()
    {

        $ano_modelo = FipeJson("ConsultarAnoModelo", array(
            "codigoTabelaReferencia" => $this->getReference(),
            "codigoTipoVeiculo" => CarEnum::CAR,
            "codigoMarca" => 21,
            "codigoModelo" => 4925
          ));
    }

    public function getVehiclesPrice()
    {


    }
}
