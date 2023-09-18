@extends('main', ['title'=>'Informasi Kamar'])
@section('content')
@include('pages.partials.hero',['title' => 'Informasi Kamar RSUD Blambangan','menu' => 'pasien & pengunjung'])
    <div class="card">
        <div class="container">
            <br>
            <div class="card-total">
                <p class="total" style="color: #169BE6">TOTAL TEMPAT TIDUR : <span class="text-dark">320</span></p> 
            </div>
            <br>
            <table class="table table-bordered text-center">
                <thead style="background-color: #2470A0; color: white;">
                    <tr>
                        <th scope="col">NAMA RUANGAN</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td-color">ICU</td>
                        <td>Itensif</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td class="td-color">ICCU</td>
                        <td>Itensif</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td class="td-color">Sayu Wiwit (Ibu)</td>
                        <td>Kelas I, Kelas II, Kelas III</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td class="td-color">Sayu Wiwit (Rawat Bayi Gabung)</td>
                        <td>Kelas I, Kelas II, Kelas III</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td class="td-color">Mas Alit</td>
                        <td>Kelas I, Kelas II, Kelas III</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td class="td-color">Sekardalu</td>
                        <td>Kelas III, Itensif (NICU 10)</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td class="td-color">Tawang Alun Atas</td>
                        <td>Kelas I, Kelas II, Kelas III</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td class="td-color">Tawang Alun Bawah</td>
                        <td>Kelas II, Kelas III</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td class="td-color">Prof. dr. Immanoedin</td>
                        <td>VVIP, VIP</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td class="td-color">Agung Wilis</td>
                        <td>Kelas I, Kelas II, Kelas III</td>
                        <td>38</td>
                    </tr>
                    <tr>
                        <td class="td-color">Pulmo Center</td>
                        <td>Kelas I,Kelas II, Kelas III</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td class="td-color">TB RO</td>
                        <td>Kelas III</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td class="td-color">Isolasi I</td>
                        <td>Isolasi</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td class="td-color">Isolasi II</td>
                        <td>Isolasi</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td class="td-color">Isolasi Bayi</td>
                        <td>Isolasi</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td class="td-color">Isolasi Bersalin</td>
                        <td>Isolasi</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td class="td-color">Hemodialisa</td>
                        <td>Intensif</td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td class="td-color">IGD</td>
                        <td>Intensif</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td class="td-color">IBS Kamar Operasi</td>
                        <td>Intensif</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td class="td-color">IBS Recovery Room</td>
                        <td>Intensif</td>
                        <td>6</td>
                    </tr>
                    
                    
                    
                </tbody>
                
            </table>
      
        </div>
        
    </div>
</section>
@endsection