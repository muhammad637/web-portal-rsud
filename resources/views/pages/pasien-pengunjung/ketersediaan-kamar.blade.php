@extends('main')
@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('{{asset('images/bg1.webp')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="{{route('home')}}">Beranda</a></span><span>PASIEN & PENGUNJUNG</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}" style="text-shadow: 2px 2px 4px #000;">Ketersediaan Kamar Tidur</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
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
                        <td></td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td class="td-color">ICCU</td>
                        <td></td>
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