@extends('layouts.merchantapp')
    @section('content')
        <div class="content">
            <div class="sidebar_opener">
                <h2>Заявки</h2>
                <div class="for_sidebar">
                    <p>Sidebar</p>
                </div>
            </div>

            <ul class="application_top_filter scroller">
                <li><a href="{{ route('anasiyacreate') }}">Создать пост</a></li> {{--
                <li><a href=""><div>Rad etildi</div></a></li>
                <li><a href="">Rasmiylashtirildi</a></li>
                <li><a href=""><div>Bekor qilindi</div></a></li>
                <li><a href="">O'chirildi</a></li>
                --}}
            </ul>
            <div class="line"></div>

            <div class="table_section">
                <div class="assolute_section scroller">
                    <table  class="table-fill">
                        <thead class="table_head">
                            <tr>
                                <th class="main">ID</th>
                                <th class="main">Пост тайтл</th>
                                <th class="main">Язык</th>
                                <th class="main">Дата</th>
                                <th class="main">Дейтвие</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                                <tr>
                                    <!-- THIS IS MAIN ID LINK -->
                                    <td><a href="javascript:;"> #23 </a></td>
                                    <td class="apper_name" style="text-align: center;">
                                        <h5>John Doe</h5>
                                    </td>
                                    <td class="holat_narxi">Origin</td>
                                    <td class="holati" style="text-align: center;">3 343 200 сум</td>
                                    <td class="holati" style="text-align: center;">as</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagnigation">
                   {{--{{ $orders->links() }}

                    <ul>
                        <!-- PREVIOUS -->
                        <li><a href=""> < </a></li>
                        <!-- ENDPREVIOUS -->

                        <!-- MAIN -->
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <!-- ENDMAIN -->

                        <!-- NEXT -->
                        <li><a href=""> > </a></li>
                        <!-- ENDPNEXT -->
                    </ul> --}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
