<?php
/*
ETK - Eniwer Training Kit
Copyright (C) 2025 Felipe Andrés Solís Albanese

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commune;

class CommuneSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [ 'code' => '15101', 'name' => 'Arica', 'region_id' => 1 ],
            [ 'code' => '15102', 'name' => 'Camarones', 'region_id' => 1 ],
            [ 'code' => '15201', 'name' => 'Putre', 'region_id' => 1 ],
            [ 'code' => '15202', 'name' => 'General Lagos', 'region_id' => 1 ],
            [ 'code' => '1101', 'name' => 'Iquique', 'region_id' => 2 ],
            [ 'code' => '1107', 'name' => 'Alto Hospicio', 'region_id' => 2 ],
            [ 'code' => '1401', 'name' => 'Pozo Almonte', 'region_id' => 2 ],
            [ 'code' => '1402', 'name' => 'Camiña', 'region_id' => 2 ],
            [ 'code' => '1403', 'name' => 'Colchane', 'region_id' => 2 ],
            [ 'code' => '1404', 'name' => 'Huara', 'region_id' => 2 ],
            [ 'code' => '1405', 'name' => 'Pica', 'region_id' => 2 ],
            [ 'code' => '2101', 'name' => 'Antofagasta', 'region_id' => 3 ],
            [ 'code' => '2102', 'name' => 'Mejillones', 'region_id' => 3 ],
            [ 'code' => '2103', 'name' => 'Sierra Gorda', 'region_id' => 3 ],
            [ 'code' => '2104', 'name' => 'Taltal', 'region_id' => 3 ],
            [ 'code' => '2201', 'name' => 'Calama', 'region_id' => 3 ],
            [ 'code' => '2202', 'name' => 'Ollagüe', 'region_id' => 3 ],
            [ 'code' => '2203', 'name' => 'San Pedro de Atacama', 'region_id' => 3 ],
            [ 'code' => '2301', 'name' => 'Tocopilla', 'region_id' => 3 ],
            [ 'code' => '2302', 'name' => 'María Elena', 'region_id' => 3 ],
            [ 'code' => '3101', 'name' => 'Copiapó', 'region_id' => 4 ],
            [ 'code' => '3102', 'name' => 'Caldera', 'region_id' => 4 ],
            [ 'code' => '3103', 'name' => 'Tierra Amarilla', 'region_id' => 4 ],
            [ 'code' => '3201', 'name' => 'Chañaral', 'region_id' => 4 ],
            [ 'code' => '3202', 'name' => 'Diego de Almagro', 'region_id' => 4 ],
            [ 'code' => '3301', 'name' => 'Vallenar', 'region_id' => 4 ],
            [ 'code' => '3302', 'name' => 'Alto del Carmen', 'region_id' => 4 ],
            [ 'code' => '3303', 'name' => 'Freirina', 'region_id' => 4 ],
            [ 'code' => '3304', 'name' => 'Huasco', 'region_id' => 4 ],
            [ 'code' => '4101', 'name' => 'La Serena', 'region_id' => 5 ],
            [ 'code' => '4102', 'name' => 'Coquimbo', 'region_id' => 5 ],
            [ 'code' => '4103', 'name' => 'Andacollo', 'region_id' => 5 ],
            [ 'code' => '4104', 'name' => 'La Higuera', 'region_id' => 5 ],
            [ 'code' => '4105', 'name' => 'Paihuano', 'region_id' => 5 ],
            [ 'code' => '4106', 'name' => 'Vicuña', 'region_id' => 5 ],
            [ 'code' => '4201', 'name' => 'Illapel', 'region_id' => 5 ],
            [ 'code' => '4202', 'name' => 'Canela', 'region_id' => 5 ],
            [ 'code' => '4203', 'name' => 'Los Vilos', 'region_id' => 5 ],
            [ 'code' => '4204', 'name' => 'Salamanca', 'region_id' => 5 ],
            [ 'code' => '4301', 'name' => 'Ovalle', 'region_id' => 5 ],
            [ 'code' => '4302', 'name' => 'Combarbalá', 'region_id' => 5 ],
            [ 'code' => '4303', 'name' => 'Monte Patria', 'region_id' => 5 ],
            [ 'code' => '4304', 'name' => 'Punitaqui', 'region_id' => 5 ],
            [ 'code' => '4305', 'name' => 'Río Hurtado', 'region_id' => 5 ],
            [ 'code' => '5101', 'name' => 'Valparaíso', 'region_id' => 6 ],
            [ 'code' => '5102', 'name' => 'Casablanca', 'region_id' => 6 ],
            [ 'code' => '5103', 'name' => 'Concón', 'region_id' => 6 ],
            [ 'code' => '5104', 'name' => 'Juan Fernández', 'region_id' => 6 ],
            [ 'code' => '5105', 'name' => 'Puchuncaví', 'region_id' => 6 ],
            [ 'code' => '5107', 'name' => 'Quintero', 'region_id' => 6 ],
            [ 'code' => '5109', 'name' => 'Viña del Mar', 'region_id' => 6 ],
            [ 'code' => '5201', 'name' => 'Isla de Pascua', 'region_id' => 6 ],
            [ 'code' => '5301', 'name' => 'Los Andes', 'region_id' => 6 ],
            [ 'code' => '5302', 'name' => 'Calle Larga', 'region_id' => 6 ],
            [ 'code' => '5303', 'name' => 'Rinconada', 'region_id' => 6 ],
            [ 'code' => '5304', 'name' => 'San Esteban', 'region_id' => 6 ],
            [ 'code' => '5401', 'name' => 'La Ligua', 'region_id' => 6 ],
            [ 'code' => '5402', 'name' => 'Cabildo', 'region_id' => 6 ],
            [ 'code' => '5403', 'name' => 'Papudo', 'region_id' => 6 ],
            [ 'code' => '5404', 'name' => 'Petorca', 'region_id' => 6 ],
            [ 'code' => '5405', 'name' => 'Zapallar', 'region_id' => 6 ],
            [ 'code' => '5501', 'name' => 'Quillota', 'region_id' => 6 ],
            [ 'code' => '5502', 'name' => 'La Calera', 'region_id' => 6 ],
            [ 'code' => '5503', 'name' => 'Hijuelas', 'region_id' => 6 ],
            [ 'code' => '5504', 'name' => 'La Cruz', 'region_id' => 6 ],
            [ 'code' => '5506', 'name' => 'Nogales', 'region_id' => 6 ],
            [ 'code' => '5601', 'name' => 'San Antonio', 'region_id' => 6 ],
            [ 'code' => '5602', 'name' => 'Algarrobo', 'region_id' => 6 ],
            [ 'code' => '5603', 'name' => 'Cartagena', 'region_id' => 6 ],
            [ 'code' => '5604', 'name' => 'El Quisco', 'region_id' => 6 ],
            [ 'code' => '5605', 'name' => 'El Tabo', 'region_id' => 6 ],
            [ 'code' => '5606', 'name' => 'Santo Domingo', 'region_id' => 6 ],
            [ 'code' => '5701', 'name' => 'San Felipe', 'region_id' => 6 ],
            [ 'code' => '5702', 'name' => 'Catemu', 'region_id' => 6 ],
            [ 'code' => '5703', 'name' => 'Llay-Llay', 'region_id' => 6 ],
            [ 'code' => '5704', 'name' => 'Panquehue', 'region_id' => 6 ],
            [ 'code' => '5705', 'name' => 'Putaendo', 'region_id' => 6 ],
            [ 'code' => '5706', 'name' => 'Santa María', 'region_id' => 6 ],
            [ 'code' => '5801', 'name' => 'Quilpué', 'region_id' => 6 ],
            [ 'code' => '5802', 'name' => 'Limache', 'region_id' => 6 ],
            [ 'code' => '5803', 'name' => 'Olmué', 'region_id' => 6 ],
            [ 'code' => '5804', 'name' => 'Villa Alemana', 'region_id' => 6 ],
            [ 'code' => '6101', 'name' => 'Rancagua', 'region_id' => 7 ],
            [ 'code' => '6102', 'name' => 'Codegua', 'region_id' => 7 ],
            [ 'code' => '6103', 'name' => 'Coinco', 'region_id' => 7 ],
            [ 'code' => '6104', 'name' => 'Coltauco', 'region_id' => 7 ],
            [ 'code' => '6105', 'name' => 'Doñihue', 'region_id' => 7 ],
            [ 'code' => '6106', 'name' => 'Graneros', 'region_id' => 7 ],
            [ 'code' => '6107', 'name' => 'Las Cabras', 'region_id' => 7 ],
            [ 'code' => '6108', 'name' => 'Machalí', 'region_id' => 7 ],
            [ 'code' => '6109', 'name' => 'Malloa', 'region_id' => 7 ],
            [ 'code' => '6110', 'name' => 'Mostazal', 'region_id' => 7 ],
            [ 'code' => '6111', 'name' => 'Olivar', 'region_id' => 7 ],
            [ 'code' => '6112', 'name' => 'Peumo', 'region_id' => 7 ],
            [ 'code' => '6113', 'name' => 'Pichidegua', 'region_id' => 7 ],
            [ 'code' => '6114', 'name' => 'Quinta de Tilcoco', 'region_id' => 7 ],
            [ 'code' => '6115', 'name' => 'Rengo', 'region_id' => 7 ],
            [ 'code' => '6116', 'name' => 'Requínoa', 'region_id' => 7 ],
            [ 'code' => '6117', 'name' => 'San Vicente', 'region_id' => 7 ],
            [ 'code' => '6201', 'name' => 'Pichilemu', 'region_id' => 7 ],
            [ 'code' => '6202', 'name' => 'La Estrella', 'region_id' => 7 ],
            [ 'code' => '6203', 'name' => 'Litueche', 'region_id' => 7 ],
            [ 'code' => '6204', 'name' => 'Marchihue', 'region_id' => 7 ],
            [ 'code' => '6205', 'name' => 'Navidad', 'region_id' => 7 ],
            [ 'code' => '6206', 'name' => 'Paredones', 'region_id' => 7 ],
            [ 'code' => '6301', 'name' => 'San Fernando', 'region_id' => 7 ],
            [ 'code' => '6302', 'name' => 'Chépica', 'region_id' => 7 ],
            [ 'code' => '6303', 'name' => 'Chimbarongo', 'region_id' => 7 ],
            [ 'code' => '6304', 'name' => 'Lolol', 'region_id' => 7 ],
            [ 'code' => '6305', 'name' => 'Nancagua', 'region_id' => 7 ],
            [ 'code' => '6306', 'name' => 'Palmilla', 'region_id' => 7 ],
            [ 'code' => '6307', 'name' => 'Peralillo', 'region_id' => 7 ],
            [ 'code' => '6308', 'name' => 'Placilla', 'region_id' => 7 ],
            [ 'code' => '6309', 'name' => 'Pumanque', 'region_id' => 7 ],
            [ 'code' => '6310', 'name' => 'Santa Cruz', 'region_id' => 7 ],
            [ 'code' => '7101', 'name' => 'Talca', 'region_id' => 8 ],
            [ 'code' => '7102', 'name' => 'Constitución', 'region_id' => 8 ],
            [ 'code' => '7103', 'name' => 'Curepto', 'region_id' => 8 ],
            [ 'code' => '7104', 'name' => 'Empedrado', 'region_id' => 8 ],
            [ 'code' => '7105', 'name' => 'Maule', 'region_id' => 8 ],
            [ 'code' => '7106', 'name' => 'Pelarco', 'region_id' => 8 ],
            [ 'code' => '7107', 'name' => 'Pencahue', 'region_id' => 8 ],
            [ 'code' => '7108', 'name' => 'Río Claro', 'region_id' => 8 ],
            [ 'code' => '7109', 'name' => 'San Clemente', 'region_id' => 8 ],
            [ 'code' => '7110', 'name' => 'San Rafael', 'region_id' => 8 ],
            [ 'code' => '7201', 'name' => 'Cauquenes', 'region_id' => 8 ],
            [ 'code' => '7202', 'name' => 'Chanco', 'region_id' => 8 ],
            [ 'code' => '7203', 'name' => 'Pelluhue', 'region_id' => 8 ],
            [ 'code' => '7301', 'name' => 'Curicó', 'region_id' => 8 ],
            [ 'code' => '7302', 'name' => 'Hualañé', 'region_id' => 8 ],
            [ 'code' => '7303', 'name' => 'Licantén', 'region_id' => 8 ],
            [ 'code' => '7304', 'name' => 'Molina', 'region_id' => 8 ],
            [ 'code' => '7305', 'name' => 'Rauco', 'region_id' => 8 ],
            [ 'code' => '7306', 'name' => 'Romeral', 'region_id' => 8 ],
            [ 'code' => '7307', 'name' => 'Sagrada Familia', 'region_id' => 8 ],
            [ 'code' => '7308', 'name' => 'Teno', 'region_id' => 8 ],
            [ 'code' => '7309', 'name' => 'Vichuquén', 'region_id' => 8 ],
            [ 'code' => '7401', 'name' => 'Linares', 'region_id' => 8 ],
            [ 'code' => '7402', 'name' => 'Colbún', 'region_id' => 8 ],
            [ 'code' => '7403', 'name' => 'Longaví', 'region_id' => 8 ],
            [ 'code' => '7404', 'name' => 'Parral', 'region_id' => 8 ],
            [ 'code' => '7405', 'name' => 'Retiro', 'region_id' => 8 ],
            [ 'code' => '7406', 'name' => 'San Javier', 'region_id' => 8 ],
            [ 'code' => '7407', 'name' => 'Villa Alegre', 'region_id' => 8 ],
            [ 'code' => '7408', 'name' => 'Yerbas Buenas', 'region_id' => 8 ],
            [ 'code' => '16101', 'name' => 'Chillán', 'region_id' => 9 ],
            [ 'code' => '16102', 'name' => 'Bulnes', 'region_id' => 9 ],
            [ 'code' => '16103', 'name' => 'Chillán Viejo', 'region_id' => 9 ],
            [ 'code' => '16104', 'name' => 'El Carmen', 'region_id' => 9 ],
            [ 'code' => '16105', 'name' => 'Pemuco', 'region_id' => 9 ],
            [ 'code' => '16106', 'name' => 'Pinto', 'region_id' => 9 ],
            [ 'code' => '16107', 'name' => 'Quillón', 'region_id' => 9 ],
            [ 'code' => '16108', 'name' => 'San Ignacio', 'region_id' => 9 ],
            [ 'code' => '16109', 'name' => 'Yungay', 'region_id' => 9 ],
            [ 'code' => '16201', 'name' => 'Quirihue', 'region_id' => 9 ],
            [ 'code' => '16202', 'name' => 'Cobquecura', 'region_id' => 9 ],
            [ 'code' => '16203', 'name' => 'Coelemu', 'region_id' => 9 ],
            [ 'code' => '16204', 'name' => 'Ninhue', 'region_id' => 9 ],
            [ 'code' => '16205', 'name' => 'Portezuelo', 'region_id' => 9 ],
            [ 'code' => '16206', 'name' => 'Ránquil', 'region_id' => 9 ],
            [ 'code' => '16207', 'name' => 'Treguaco', 'region_id' => 9 ],
            [ 'code' => '16301', 'name' => 'San Carlos', 'region_id' => 9 ],
            [ 'code' => '16302', 'name' => 'Coihueco', 'region_id' => 9 ],
            [ 'code' => '16303', 'name' => 'Ñiquén', 'region_id' => 9 ],
            [ 'code' => '16304', 'name' => 'San Fabián', 'region_id' => 9 ],
            [ 'code' => '16305', 'name' => 'San Nicolás', 'region_id' => 9 ],
            [ 'code' => '8101', 'name' => 'Concepción', 'region_id' => 10 ],
            [ 'code' => '8102', 'name' => 'Coronel', 'region_id' => 10 ],
            [ 'code' => '8103', 'name' => 'Chiguayante', 'region_id' => 10 ],
            [ 'code' => '8104', 'name' => 'Florida', 'region_id' => 10 ],
            [ 'code' => '8105', 'name' => 'Hualqui', 'region_id' => 10 ],
            [ 'code' => '8106', 'name' => 'Lota', 'region_id' => 10 ],
            [ 'code' => '8107', 'name' => 'Penco', 'region_id' => 10 ],
            [ 'code' => '8108', 'name' => 'San Pedro de La Paz', 'region_id' => 10 ],
            [ 'code' => '8109', 'name' => 'Santa Juana', 'region_id' => 10 ],
            [ 'code' => '8110', 'name' => 'Talcahuano', 'region_id' => 10 ],
            [ 'code' => '8111', 'name' => 'Tomé', 'region_id' => 10 ],
            [ 'code' => '8112', 'name' => 'Hualpén', 'region_id' => 10 ],
            [ 'code' => '8201', 'name' => 'Lebu', 'region_id' => 10 ],
            [ 'code' => '8202', 'name' => 'Arauco', 'region_id' => 10 ],
            [ 'code' => '8203', 'name' => 'Cañete', 'region_id' => 10 ],
            [ 'code' => '8204', 'name' => 'Contulmo', 'region_id' => 10 ],
            [ 'code' => '8205', 'name' => 'Curanilahue', 'region_id' => 10 ],
            [ 'code' => '8206', 'name' => 'Los Álamos', 'region_id' => 10 ],
            [ 'code' => '8207', 'name' => 'Tirúa', 'region_id' => 10 ],
            [ 'code' => '8301', 'name' => 'Los Ángeles', 'region_id' => 10 ],
            [ 'code' => '8302', 'name' => 'Antuco', 'region_id' => 10 ],
            [ 'code' => '8303', 'name' => 'Cabrero', 'region_id' => 10 ],
            [ 'code' => '8304', 'name' => 'Laja', 'region_id' => 10 ],
            [ 'code' => '8305', 'name' => 'Mulchén', 'region_id' => 10 ],
            [ 'code' => '8306', 'name' => 'Nacimiento', 'region_id' => 10 ],
            [ 'code' => '8307', 'name' => 'Negrete', 'region_id' => 10 ],
            [ 'code' => '8308', 'name' => 'Quilaco', 'region_id' => 10 ],
            [ 'code' => '8309', 'name' => 'Quilleco', 'region_id' => 10 ],
            [ 'code' => '8310', 'name' => 'San Rosendo', 'region_id' => 10 ],
            [ 'code' => '8311', 'name' => 'Santa Bárbara', 'region_id' => 10 ],
            [ 'code' => '8312', 'name' => 'Tucapel', 'region_id' => 10 ],
            [ 'code' => '8313', 'name' => 'Yumbel', 'region_id' => 10 ],
            [ 'code' => '8314', 'name' => 'Alto Biobío', 'region_id' => 10 ],
            [ 'code' => '9101', 'name' => 'Temuco', 'region_id' => 11 ],
            [ 'code' => '9102', 'name' => 'Carahue', 'region_id' => 11 ],
            [ 'code' => '9103', 'name' => 'Cunco', 'region_id' => 11 ],
            [ 'code' => '9104', 'name' => 'Curarrehue', 'region_id' => 11 ],
            [ 'code' => '9105', 'name' => 'Freire', 'region_id' => 11 ],
            [ 'code' => '9106', 'name' => 'Galvarino', 'region_id' => 11 ],
            [ 'code' => '9107', 'name' => 'Gorbea', 'region_id' => 11 ],
            [ 'code' => '9108', 'name' => 'Lautaro', 'region_id' => 11 ],
            [ 'code' => '9109', 'name' => 'Loncoche', 'region_id' => 11 ],
            [ 'code' => '9110', 'name' => 'Melipeuco', 'region_id' => 11 ],
            [ 'code' => '9111', 'name' => 'Nueva Imperial', 'region_id' => 11 ],
            [ 'code' => '9112', 'name' => 'Padre Las Casas', 'region_id' => 11 ],
            [ 'code' => '9113', 'name' => 'Perquenco', 'region_id' => 11 ],
            [ 'code' => '9114', 'name' => 'Pitrufquén', 'region_id' => 11 ],
            [ 'code' => '9115', 'name' => 'Pucón', 'region_id' => 11 ],
            [ 'code' => '9116', 'name' => 'Saavedra', 'region_id' => 11 ],
            [ 'code' => '9117', 'name' => 'Teodoro Schmidt', 'region_id' => 11 ],
            [ 'code' => '9118', 'name' => 'Toltén', 'region_id' => 11 ],
            [ 'code' => '9119', 'name' => 'Vilcún', 'region_id' => 11 ],
            [ 'code' => '9120', 'name' => 'Villarrica', 'region_id' => 11 ],
            [ 'code' => '9121', 'name' => 'Cholchol', 'region_id' => 11 ],
            [ 'code' => '9201', 'name' => 'Angol', 'region_id' => 11 ],
            [ 'code' => '9202', 'name' => 'Collipulli', 'region_id' => 11 ],
            [ 'code' => '9203', 'name' => 'Curacautín', 'region_id' => 11 ],
            [ 'code' => '9204', 'name' => 'Ercilla', 'region_id' => 11 ],
            [ 'code' => '9205', 'name' => 'Lonquimay', 'region_id' => 11 ],
            [ 'code' => '9206', 'name' => 'Los Sauces', 'region_id' => 11 ],
            [ 'code' => '9207', 'name' => 'Lumaco', 'region_id' => 11 ],
            [ 'code' => '9208', 'name' => 'Purén', 'region_id' => 11 ],
            [ 'code' => '9209', 'name' => 'Renaico', 'region_id' => 11 ],
            [ 'code' => '9210', 'name' => 'Traiguén', 'region_id' => 11 ],
            [ 'code' => '9211', 'name' => 'Victoria', 'region_id' => 11 ],
            [ 'code' => '14101', 'name' => 'Valdivia', 'region_id' => 12 ],
            [ 'code' => '14102', 'name' => 'Corral', 'region_id' => 12 ],
            [ 'code' => '14103', 'name' => 'Lanco', 'region_id' => 12 ],
            [ 'code' => '14104', 'name' => 'Los Lagos', 'region_id' => 12 ],
            [ 'code' => '14105', 'name' => 'Máfil', 'region_id' => 12 ],
            [ 'code' => '14106', 'name' => 'Mariquina', 'region_id' => 12 ],
            [ 'code' => '14107', 'name' => 'Paillaco', 'region_id' => 12 ],
            [ 'code' => '14108', 'name' => 'Panguipulli', 'region_id' => 12 ],
            [ 'code' => '14201', 'name' => 'La Unión', 'region_id' => 12 ],
            [ 'code' => '14202', 'name' => 'Futrono', 'region_id' => 12 ],
            [ 'code' => '14203', 'name' => 'Lago Ranco', 'region_id' => 12 ],
            [ 'code' => '14204', 'name' => 'Río Bueno', 'region_id' => 12 ],
            [ 'code' => '10101', 'name' => 'Puerto Montt', 'region_id' => 13 ],
            [ 'code' => '10102', 'name' => 'Calbuco', 'region_id' => 13 ],
            [ 'code' => '10103', 'name' => 'Cochamó', 'region_id' => 13 ],
            [ 'code' => '10104', 'name' => 'Fresia', 'region_id' => 13 ],
            [ 'code' => '10105', 'name' => 'Frutillar', 'region_id' => 13 ],
            [ 'code' => '10106', 'name' => 'Los Muermos', 'region_id' => 13 ],
            [ 'code' => '10107', 'name' => 'Llanquihue', 'region_id' => 13 ],
            [ 'code' => '10108', 'name' => 'Maullín', 'region_id' => 13 ],
            [ 'code' => '10109', 'name' => 'Puerto Varas', 'region_id' => 13 ],
            [ 'code' => '10201', 'name' => 'Castro', 'region_id' => 13 ],
            [ 'code' => '10202', 'name' => 'Ancud', 'region_id' => 13 ],
            [ 'code' => '10203', 'name' => 'Chonchi', 'region_id' => 13 ],
            [ 'code' => '10204', 'name' => 'Curaco de Vélez', 'region_id' => 13 ],
            [ 'code' => '10205', 'name' => 'Dalcahue', 'region_id' => 13 ],
            [ 'code' => '10206', 'name' => 'Puqueldón', 'region_id' => 13 ],
            [ 'code' => '10207', 'name' => 'Queilén', 'region_id' => 13 ],
            [ 'code' => '10208', 'name' => 'Quellón', 'region_id' => 13 ],
            [ 'code' => '10209', 'name' => 'Quemchi', 'region_id' => 13 ],
            [ 'code' => '10210', 'name' => 'Quinchao', 'region_id' => 13 ],
            [ 'code' => '10301', 'name' => 'Osorno', 'region_id' => 13 ],
            [ 'code' => '10302', 'name' => 'Puerto Octay', 'region_id' => 13 ],
            [ 'code' => '10303', 'name' => 'Purranque', 'region_id' => 13 ],
            [ 'code' => '10304', 'name' => 'Puyehue', 'region_id' => 13 ],
            [ 'code' => '10305', 'name' => 'Río Negro', 'region_id' => 13 ],
            [ 'code' => '10306', 'name' => 'San Juan de la Costa', 'region_id' => 13 ],
            [ 'code' => '10307', 'name' => 'San Pablo', 'region_id' => 13 ],
            [ 'code' => '10401', 'name' => 'Chaitén', 'region_id' => 13 ],
            [ 'code' => '10402', 'name' => 'Futaleufú', 'region_id' => 13 ],
            [ 'code' => '10403', 'name' => 'Hualaihué', 'region_id' => 13 ],
            [ 'code' => '10404', 'name' => 'Palena', 'region_id' => 13 ],
            [ 'code' => '11101', 'name' => 'Coyhaique', 'region_id' => 14 ],
            [ 'code' => '11102', 'name' => 'Lago Verde', 'region_id' => 14 ],
            [ 'code' => '11201', 'name' => 'Aysén', 'region_id' => 14 ],
            [ 'code' => '11202', 'name' => 'Cisnes', 'region_id' => 14 ],
            [ 'code' => '11203', 'name' => 'Guaitecas', 'region_id' => 14 ],
            [ 'code' => '11301', 'name' => 'Cochrane', 'region_id' => 14 ],
            [ 'code' => '11302', 'name' => "O'Higgins", 'region_id' => 14 ],
            [ 'code' => '11303', 'name' => 'Tortel', 'region_id' => 14 ],
            [ 'code' => '11401', 'name' => 'Chile Chico', 'region_id' => 14 ],
            [ 'code' => '11402', 'name' => 'Río Ibáñez', 'region_id' => 14 ],
            [ 'code' => '12101', 'name' => 'Punta Arenas', 'region_id' => 15 ],
            [ 'code' => '12102', 'name' => 'Laguna Blanca', 'region_id' => 15 ],
            [ 'code' => '12103', 'name' => 'Río Verde', 'region_id' => 15 ],
            [ 'code' => '12104', 'name' => 'San Gregorio', 'region_id' => 15 ],
            [ 'code' => '12201', 'name' => 'Cabo de Hornos', 'region_id' => 15 ],
            [ 'code' => '12202', 'name' => 'Antártica', 'region_id' => 15 ],
            [ 'code' => '12301', 'name' => 'Porvenir', 'region_id' => 15 ],
            [ 'code' => '12302', 'name' => 'Primavera', 'region_id' => 15 ],
            [ 'code' => '12303', 'name' => 'Timaukel', 'region_id' => 15 ],
            [ 'code' => '12401', 'name' => 'Natales', 'region_id' => 15 ],
            [ 'code' => '12402', 'name' => 'Torres del Paine', 'region_id' => 15 ],
            [ 'code' => '13101', 'name' => 'Santiago', 'region_id' => 16 ],
            [ 'code' => '13102', 'name' => 'Cerrillos', 'region_id' => 16 ],
            [ 'code' => '13103', 'name' => 'Cerro Navia', 'region_id' => 16 ],
            [ 'code' => '13104', 'name' => 'Conchalí', 'region_id' => 16 ],
            [ 'code' => '13105', 'name' => 'El Bosque', 'region_id' => 16 ],
            [ 'code' => '13106', 'name' => 'Estación Central', 'region_id' => 16 ],
            [ 'code' => '13107', 'name' => 'Huechuraba', 'region_id' => 16 ],
            [ 'code' => '13108', 'name' => 'Independencia', 'region_id' => 16 ],
            [ 'code' => '13109', 'name' => 'La Cisterna', 'region_id' => 16 ],
            [ 'code' => '13110', 'name' => 'La Florida', 'region_id' => 16 ],
            [ 'code' => '13111', 'name' => 'La Granja', 'region_id' => 16 ],
            [ 'code' => '13112', 'name' => 'La Pintana', 'region_id' => 16 ],
            [ 'code' => '13113', 'name' => 'La Reina', 'region_id' => 16 ],
            [ 'code' => '13114', 'name' => 'Las Condes', 'region_id' => 16 ],
            [ 'code' => '13115', 'name' => 'Lo Barnechea', 'region_id' => 16 ],
            [ 'code' => '13116', 'name' => 'Lo Espejo', 'region_id' => 16 ],
            [ 'code' => '13117', 'name' => 'Lo Prado', 'region_id' => 16 ],
            [ 'code' => '13118', 'name' => 'Macul', 'region_id' => 16 ],
            [ 'code' => '13119', 'name' => 'Maipú', 'region_id' => 16 ],
            [ 'code' => '13120', 'name' => 'Ñuñoa', 'region_id' => 16 ],
            [ 'code' => '13121', 'name' => 'Pedro Aguirre Cerda', 'region_id' => 16 ],
            [ 'code' => '13122', 'name' => 'Peñalolén', 'region_id' => 16 ],
            [ 'code' => '13123', 'name' => 'Providencia', 'region_id' => 16 ],
            [ 'code' => '13124', 'name' => 'Pudahuel', 'region_id' => 16 ],
            [ 'code' => '13125', 'name' => 'Quilicura', 'region_id' => 16 ],
            [ 'code' => '13126', 'name' => 'Quinta Normal', 'region_id' => 16 ],
            [ 'code' => '13127', 'name' => 'Recoleta', 'region_id' => 16 ],
            [ 'code' => '13128', 'name' => 'Renca', 'region_id' => 16 ],
            [ 'code' => '13129', 'name' => 'San Joaquín', 'region_id' => 16 ],
            [ 'code' => '13130', 'name' => 'San Miguel', 'region_id' => 16 ],
            [ 'code' => '13131', 'name' => 'San Ramón', 'region_id' => 16 ],
            [ 'code' => '13132', 'name' => 'Vitacura', 'region_id' => 16 ],
            [ 'code' => '13201', 'name' => 'Puente Alto', 'region_id' => 16 ],
            [ 'code' => '13202', 'name' => 'Pirque', 'region_id' => 16 ],
            [ 'code' => '13203', 'name' => 'San José de Maipo', 'region_id' => 16 ],
            [ 'code' => '13301', 'name' => 'Colina', 'region_id' => 16 ],
            [ 'code' => '13302', 'name' => 'Lampa', 'region_id' => 16 ],
            [ 'code' => '13303', 'name' => 'Til Til', 'region_id' => 16 ],
            [ 'code' => '13401', 'name' => 'San Bernardo', 'region_id' => 16 ],
            [ 'code' => '13402', 'name' => 'Buin', 'region_id' => 16 ],
            [ 'code' => '13403', 'name' => 'Calera de Tango', 'region_id' => 16 ],
            [ 'code' => '13404', 'name' => 'Paine', 'region_id' => 16 ],
            [ 'code' => '13501', 'name' => 'Melipilla', 'region_id' => 16 ],
            [ 'code' => '13502', 'name' => 'Alhué', 'region_id' => 16 ],
            [ 'code' => '13503', 'name' => 'Curacaví', 'region_id' => 16 ],
            [ 'code' => '13504', 'name' => 'María Pinto', 'region_id' => 16 ],
            [ 'code' => '13505', 'name' => 'San Pedro', 'region_id' => 16 ],
            [ 'code' => '13601', 'name' => 'Talagante', 'region_id' => 16 ],
            [ 'code' => '13602', 'name' => 'El Monte', 'region_id' => 16 ],
            [ 'code' => '13603', 'name' => 'Isla de Maipo', 'region_id' => 16 ],
            [ 'code' => '13604', 'name' => 'Padre Hurtado', 'region_id' => 16 ],
            [ 'code' => '13605', 'name' => 'Peñaflor', 'region_id' => 16 ],
        ];
        foreach($items as $i) { Commune::create($i); }
    }
}
