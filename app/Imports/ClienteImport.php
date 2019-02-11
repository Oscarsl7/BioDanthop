<?php

namespace App\Imports;

use App\Clientes;
use Maatwebsite\Excel\Concerns\ToModel;

class ClienteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Clientes([
          cli_nombre => $row[0],
          cli_correo_electronico => $row[1],
          cli_telefono => $row[2],
          cli_calle => $row[3],
          cli_numero_interior => $row[4],
          cli_numero_exterior => $row[5],
          cli_colonia => $row[6],
          cli_ciudad => $row[7],
          cli_codigo_postal => $row[8],
          cli_estado => $row[9],
          cli_rfc => $row[10],
          cli_razon_social => $row[11],
          cli_correos_iguales => $row[12],
          cli_correo_electronico_facturacion => $row[13],
          cli_direcciones_iguales => $row[14],
          cli_calle_facturacion => $row[15],
          cli_numero_interior_facturacion => $row[16],
          cli_numero_exterior_facturacion => $row[17],
          cli_colonia_facturacion => $row[18],
          cli_ciudad_facturacion => $row[19],
          cli_codigo_postal_facturacion => $row[20],
          cli_estado_facturacion => $row[21]
        ]);
    }
}
