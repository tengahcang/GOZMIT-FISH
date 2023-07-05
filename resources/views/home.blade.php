@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 mx-2 p-3 rounded mb-3">
            <div class="card mb-3" style="width: 800px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ Vite::asset('resources/images/ikan1.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Ikan Gatau</h5>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions
                        of Lorem Ipsum.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 11 mins ago</small></p>
                      <button class="btn btn-primary">Tampilkan Lebih Lanjut</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="card mb-3" style="width: 800px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ Vite::asset('resources/images/ikan2.jpg') }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Ikan Bener</h5>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions
                        of Lorem Ipsum.</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                      <button class="btn btn-primary">Tampilkan Lebih Lanjut</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>


        {{-- sidebar --}}

        {{-- <div class="col-md mx-2p-3">

            <div class="card">
                <div class="card-body">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">Ikan</th>
                        <th scope="col">Kg</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ikan Bandeng</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Ikan Lele</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Ikan Tongkol</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Ikan Lele</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Ikan Bandeng</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Ikan Lele</td>
                        <td>8</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div style="width: 100%; height: 100%; position: relative; background: white">
    <div style="width: 1440px; height: 721px; left: 0px; top: 876px; position: absolute; background: rgba(32, 66, 131, 0.15)"></div>
    <img style="width: 1440px; height: 876px; left: 0px; top: 0px; position: absolute" src="https://via.placeholder.com/1440x876" />
    <div style="width: 1440px; height: 876px; left: 0px; top: 0px; position: absolute; background: rgba(32, 66, 131, 0.90)"></div>
    <div style="width: 1440px; height: 111px; left: 0px; top: 0px; position: absolute; background: white"></div>
    
    
    <div style="width: 683px; height: 366px; left: 378px; top: 310px; position: absolute">
        <div style="width: 497px; height: 64px; left: 94px; top: 196px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>Vestibulum commodo est massa</div>
        <div style="width: 164px; height: 61px; left: 256px; top: 305px; position: absolute; background: #F79320; border-radius: 5px"></div>
        <div style="width: 71px; height: 28px; left: 303px; top: 322px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Toko</div>
        <div style="width: 683px; height: 199px; left: 0px; top: 0px; position: absolute; text-align: center; color: white; font-size: 56px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Ikan dengan Kualitas<br/>Terbaik Pilihan Nelayan </div>
    </div>
    <div style="width: 608px; height: 350px; left: 122px; top: 1056px; position: absolute">
        <div style="width: 164px; height: 60px; left: 0px; top: 290px; position: absolute">
            <div style="width: 164px; height: 60px; left: 0px; top: 0px; position: absolute; background: #F79320; border-radius: 5px"></div>
            <div style="left: 60px; top: 17px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Toko</div>
        </div>
        <div style="width: 608px; left: 0px; top: 0px; position: absolute; color: #204283; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Kami Menyediakan Ikan Terbaik<br/>dengan Budidaya Peternak </div>
        <div style="width: 486px; left: 0px; top: 132px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in. Quisque porttitor tortor blandit nunc sed ac id. Mattis in nunc libero viverra. Consectetur leo nibh ac at amet. </div>
    </div>
    <div style="width: 164px; height: 60px; left: 122px; top: 2168px; position: absolute">
        <div style="width: 164px; height: 60px; left: 0px; top: 0px; position: absolute; background: #F79320; border-radius: 5px"></div>
        <div style="left: 41px; top: 17px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Log Book</div>
    </div>
    <div style="width: 608px; left: 122px; top: 1733px; position: absolute; color: #204283; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Penjualan</div>
    <div style="width: 608px; left: 122px; top: 2380px; position: absolute; color: #204283; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Our Blog</div>
    <div style="width: 458px; left: 122px; top: 2451px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Dapatkan informasi terupdate dari Gozmit Fish!</div>
    <div style="width: 458px; left: 122px; top: 1804px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Tracking hasil penjualan lebih mudah menggunakan fitur log book.</div>
    <div style="width: 223px; left: 122px; top: 1899px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Kepuasan Pelanggan</div>
    <div style="width: 223px; left: 365px; top: 1899px; position: absolute; text-align: right; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">75%</div>
    <div style="width: 223px; left: 122px; top: 1988px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Perawatan Ikan</div>
    <div style="width: 223px; left: 122px; top: 2077px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Keberhasilan Panen</div>
    <div style="width: 223px; left: 365px; top: 1988px; position: absolute; text-align: right; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">80%</div>
    <div style="width: 223px; left: 365px; top: 2077px; position: absolute; text-align: right; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">85%</div>
    <div style="width: 466px; height: 141px; left: 852px; top: 1006px; position: absolute; background: white; border-radius: 5px"></div>
    <div style="width: 466px; height: 141px; left: 852px; top: 1171px; position: absolute; background: white; border-radius: 5px"></div>
    <div style="width: 466px; height: 141px; left: 852px; top: 1336px; position: absolute; background: white; border-radius: 5px"></div>
    <img style="width: 49.50px; height: 45px; left: 884px; top: 1219px; position: absolute" src="https://via.placeholder.com/49x45" />
    <img style="width: 45px; height: 45px; left: 883px; top: 1054px; position: absolute" src="https://via.placeholder.com/45x45" />
    <img style="width: 44.25px; height: 45px; left: 884px; top: 1384px; position: absolute" src="https://via.placeholder.com/44x45" />
    <div style="width: 291px; height: 71px; left: 953px; top: 1059px; position: absolute; color: black; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in. Quisque porttitor tortor blandit nunc sed</div>
    <div style="width: 193px; height: 28px; left: 953px; top: 1029px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Suplay Ikan</div>
    <div style="width: 291px; height: 71px; left: 953px; top: 1221px; position: absolute; color: black; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in. Quisque porttitor tortor blandit nunc sed</div>
    <div style="width: 193px; height: 28px; left: 953px; top: 1191px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rencana Budidaya</div>
    <div style="width: 291px; height: 71px; left: 953px; top: 1386px; position: absolute; color: black; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectetur. Nam quis bibendum lacinia eu id in. Quisque porttitor tortor blandit nunc sed</div>
    <div style="width: 466px; height: 6px; left: 122px; top: 1937px; position: absolute; background: #D9D9D9; border-radius: 11000px"></div>
    <div style="width: 345px; height: 6px; left: 122px; top: 1937px; position: absolute; background: #204283; border-radius: 11000px"></div>
    <div style="width: 193px; height: 28px; left: 953px; top: 1356px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Kesehatan Ikan</div>
    <img style="width: 608px; height: 480px; left: 730px; top: 1748px; position: absolute; border-radius: 5px" src="https://via.placeholder.com/608x480" />
    <div style="width: 466px; height: 6px; left: 122px; top: 2026px; position: absolute; background: #D9D9D9; border-radius: 11000px"></div>
    <div style="width: 466px; height: 6px; left: 122px; top: 2115px; position: absolute; background: #D9D9D9; border-radius: 11000px"></div>
    <div style="width: 375px; height: 6px; left: 122px; top: 2026px; position: absolute; background: #204283; border-radius: 11000px"></div>
    <div style="width: 398px; height: 6px; left: 122px; top: 2115px; position: absolute; background: #204283; border-radius: 11000px"></div>
    <div style="width: 466px; height: 587px; left: 122px; top: 2518px; position: absolute; background: white; box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25); border-radius: 5px"></div>
    <div style="width: 466px; height: 587px; left: 609px; top: 2518px; position: absolute; background: white; box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25); border-radius: 5px"></div>
    <div style="width: 466px; height: 587px; left: 1096px; top: 2518px; position: absolute; background: white; box-shadow: 0px 4px 17px rgba(0, 0, 0, 0.25); border-radius: 5px"></div>
    <img style="width: 400px; height: 295px; left: 155px; top: 2558px; position: absolute; border-radius: 5px" src="https://via.placeholder.com/400x295" />
    <img style="width: 400px; height: 295px; left: 642px; top: 2558px; position: absolute; border-radius: 5px" src="https://via.placeholder.com/400x295" />
    <img style="width: 400px; height: 295px; left: 1129px; top: 2558px; position: absolute; border-radius: 5px" src="https://via.placeholder.com/400x295" />
    <div style="width: 400px; left: 155px; top: 2880px; position: absolute; color: #204283; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">5 Tips Saat Membeli Ikan</div>
    <div style="width: 400px; left: 642px; top: 2880px; position: absolute; color: #204283; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">5 Ciri-Ciri Ikan Segar</div>
    <div style="width: 400px; left: 1129px; top: 2880px; position: absolute; color: #204283; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">10 Olahan Makanan Laut</div>
    <div style="width: 400px; left: 155px; top: 2965px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectur Dolor nunc tincidun tempor dignisime faucibus molestie.</div>
    <div style="width: 400px; left: 642px; top: 2965px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectur Dolor nunc tincidun tempor dignisime faucibus molestie.</div>
    <div style="width: 400px; left: 1129px; top: 2965px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Lorem ipsum dolor sit amet consectur Dolor nunc tincidun tempor dignisime faucibus molestie.</div>
    <div style="width: 63px; left: 186px; top: 2925px; position: absolute; color: black; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Admin</div>
    <div style="width: 63px; left: 673px; top: 2925px; position: absolute; color: black; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Admin</div>
    <div style="width: 63px; left: 1160px; top: 2925px; position: absolute; color: black; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Admin</div>
    <div style="width: 20px; height: 20px; left: 155px; top: 2925px; position: absolute; background: #F79320"></div>
    <div style="width: 20px; height: 20px; left: 642px; top: 2925px; position: absolute; background: #F79320"></div>
    <div style="width: 20px; height: 20px; left: 1129px; top: 2925px; position: absolute; background: #F79320"></div>
    <div style="width: 105px; height: 38.41px; left: 155px; top: 3030px; position: absolute">
        <div style="width: 105px; height: 38.41px; left: 0px; top: 0px; position: absolute; background: #F79320; border-radius: 5px"></div>
        <div style="width: 52.50px; height: 17.29px; left: 26.25px; top: 10.88px; position: absolute; text-align: center; color: white; font-size: 11px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Details</div>
    </div>
    <div style="width: 105px; height: 38.41px; left: 642px; top: 3030px; position: absolute">
        <div style="width: 105px; height: 38.41px; left: 0px; top: 0px; position: absolute; background: #F79320; border-radius: 5px"></div>
        <div style="width: 52.50px; height: 17.29px; left: 26.25px; top: 10.88px; position: absolute; text-align: center; color: white; font-size: 11px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Details</div>
    </div>
    <div style="width: 105px; height: 38.41px; left: 1129px; top: 3030px; position: absolute">
        <div style="width: 105px; height: 38.41px; left: 0px; top: 0px; position: absolute; background: #F79320; border-radius: 5px"></div>
        <div style="width: 52.50px; height: 17.29px; left: 26.25px; top: 10.88px; position: absolute; text-align: center; color: white; font-size: 11px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Details</div>
    </div>
    
</div>
@endsection

