@extends('layouts.frontendV2.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->title }}</h2>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            {{ getMainPage(1)->name }}
                        </a>
                    </li>

                    @if($link->parent)
                        @if($link->parent->parent)
                            <li class="active">
                                <a>
                                    {{$link->parent->parent->name}}
                                </a>
                            </li>
                        @endif

                        <li class="active">
                            <a>
                                {{$link->parent->name}}
                            </a>
                        </li>

                    @endif
                    <li class="active">{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content mr-15">
                        @if($page->image_name)
                            <div class="blog-details-img">
                                <img src="{{ $page->image }}" alt="Image">
                            </div>
                        @endif
                        <div class="blog-top-content">
                            <div class="blog-content">
                                {!! $page->content !!}
                                @if($page->images->count())
                                    <br>
                                    <div class="lightSliderHome" >
                                        <ul id="lightSlider">
                                            @foreach($page->images as $image)
                                                <li data-thumb="{{ $image->image }}">
                                                    <img src="{{ $image->image }}"/>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
@section('scripts')
    <script>
        document.getElementById("search-title").addEventListener("click", searchByTitle);
        document.getElementById("eee").addEventListener("click", sortByAuthor);
        document.getElementById("eej").addEventListener("click", sortByJornal);
        document.getElementById("rrr").addEventListener("click", sortByDate);



        function searchByTitle() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            table = document.getElementById("staff-research");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function sortByAuthor() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("staff-research");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }


        function sortByJornal() {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("staff-research");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[2];
                    y = rows[i + 1].getElementsByTagName("TD")[2];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }

        function convertDate(d) {
            var p = d.split("/");
            return +(p[2]+p[1]+p[0]);
        }

        function sortByDate() {
            var tbody = document.getElementById("staff-research");
            // get trs as array for ease of use
            var rows = [].slice.call(tbody.querySelectorAll("tr"));

            rows.sort(function(a,b) {
                return convertDate(a.cells[3].innerHTML) - convertDate(b.cells[3].innerHTML);
            });

            rows.forEach(function(v) {
                tbody.appendChild(v); // note that .appendChild() *moves* elements
            });

        }
    </script>

@endsection
