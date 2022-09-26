<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learning-Activity</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css' rel='stylesheet'>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet" >
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
        />
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
        <script src="/js/notify.js"></script>

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        .ck-editor__editable_inline {
             min-height: 200px;
            }

        </style>
    </head>

    {{-- modal insert data --}}
    <!-- Modal -->
    <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"  id="exampleModalLabel">Add Activity</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="submitdata">
                    <div class="mb-3">
                        <label for="metode" style="font-size: 16px;" class="form-label">Input Metode</label>
                        <input type="text" class="form-control form-control-sm" id="metode" placeholder="Metode learning activity" name="metode">
                    </div>
                      <div class="mb-3">
                        <label for="deskripsi" style="font-size: 16px;" class="form-label">Activity</label>
                        <div class="container">
                        <div class="januari-juni">
                            <div id="click1" style="margin-bottom:4px; cursor: pointer;"><p class="d-flex align-items-center"><i id="bawah1" class='bx bx-chevrons-right'></i> <small class="d-flex" style="font-size: 12px;">januari</small></p></div>
                            <div id="activity1" style="font-size:12px; display:none"><textarea class="ck-editor__editable_inline" name="januari" id="editor1" cols="30" rows="30"></textarea></div>

                            <div id="click2" style="margin-bottom:4px; margin-top:16px; cursor: pointer;"><p class="d-flex align-items-center"><i id="bawah2" class='bx bx-chevrons-right'></i> <small class="d-flex" style="font-size: 12px">februari</small></p></div>
                            <div id="activity2" style="font-size:12px; display:none"><textarea class="ck-editor__editable_inline" name="februari" id="editor2" cols="30" rows="30"></textarea></div>

                            <div id="click3" style="margin-bottom:4px; margin-top:16px; cursor: pointer;"><p class="d-flex align-items-center"><i id="bawah3" class='bx bx-chevrons-right'></i> <small class="d-flex" style="font-size: 12px">maret</small></p></div>
                            <div id="activity3" style="font-size:12px; display:none"><textarea class="ck-editor__editable_inline" name="maret" id="editor3" cols="30" rows="30"></textarea></div>

                            <div id="click4" style="margin-bottom:4px; margin-top:16px; cursor: pointer;"><p class="d-flex align-items-center"><i id="bawah4" class='bx bx-chevrons-right'></i> <small class="d-flex" style="font-size: 12px">april</small></p></div>
                            <div id="activity4" style="font-size:12px; display:none"><textarea class="ck-editor__editable_inline" name="april" id="editor4" cols="30" rows="30"></textarea></div>

                            <div id="click5" style="margin-bottom:4px; margin-top:16px; cursor: pointer;"><p class="d-flex align-items-center"><i id="bawah5" class='bx bx-chevrons-right'></i> <small class="d-flex" style="font-size: 12px">mei</small></p></div>
                            <div id="activity5" style="font-size:12px; display:none"><textarea class="ck-editor__editable_inline" name="mei" id="editor5" cols="30" rows="30"></textarea></div>

                            <div id="click6" style="margin-bottom:4px; margin-top:16px; cursor: pointer;"><p class="d-flex align-items-center"><i id="bawah6" class='bx bx-chevrons-down'></i> <small class="d-flex" style="font-size: 12px">juni</small></p></div>
                            <div id="activity6" style="font-size:12px;"><textarea class="ck-editor__editable_inline" name="juni" id="editor6" cols="30" rows="30"></textarea></div>
                        </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <body style="margin-top: 126px;">
        <div class="container mt-12">
            <table class="table table-striped text-center" style="width:100%">
                <thead>
                    <div class="d-flex flex-row-reverse" style="margin-right: 8px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i style="font-size: 28px;" class='bx bxs-plus-circle'></i></div>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Metode</th>
                      <th scope="col">Januari</th>
                      <th scope="col">Februari</th>
                      <th scope="col">Maret</th>
                      <th scope="col">April</th>
                      <th scope="col">Mei</th>
                      <th scope="col">Juni</th>
                      <th scope="col">#</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider" id='examples'>
                  </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function(){
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $("#submitdata").submit(function(e){
                    e.preventDefault();
                    let user_id = 1
                    let metode = $("#metode").val()
                    let januari = $("#editor1").val()
                    let februari = $("#editor2").val()
                    let maret = $("#editor3").val()
                    let april = $("#editor4").val()
                    let mei = $("#editor5").val()
                    let juni = $("#editor6").val()

                    $.ajax({
                        url:'/api/activity',
                        type:'POST',
                        data:{
                            user_id:user_id,
                            metode:metode,
                            januari:januari,
                            februari:februari,
                            maret:maret,
                            april:april,
                            mei:mei,
                            juni:juni
                        },
                        success:function(response){
                            $.notify("Data berhasil ditambahkan !", "success", { position:"right" });
                            $("#examples").append(`
                                <tr>
                                <th scope="row"i>${response.nomor }</th>
                                <td>${ response.metode }</td>
                                <td>${ response.januari }</td>
                                <td>${ response.februari }</td>
                                <td>${ response.maret }</td>
                                <td>${ response.april }</td>
                                <td>${ response.mei }</td>
                                <td>${ response.juni }</td>
                                <td>edit | delete</td>
                                </tr>
                            `)
                        }
                    });

            })
            })
        </script>
        <script>
            $(document).ready(function(){
            $("#click1").click(function(){

                $("#activity1").slideToggle("fast");
                $("i", this).toggleClass("bx-chevrons-down bx-chevrons-right");
            });
            });

            $(document).ready(function(){
            $("#click2").click(function(){

                $("#activity2").slideToggle("fast");
                $("i", this).toggleClass("bx-chevrons-down bx-chevrons-right");
            });
            });

            $(document).ready(function(){
            $("#click3").click(function(){

                $("#activity3").slideToggle("fast");
                $("i", this).toggleClass("bx-chevrons-down bx-chevrons-right");
            });
            });

            $(document).ready(function(){
            $("#click4").click(function(){

                $("#activity4").slideToggle("fast");
                $("i", this).toggleClass("bx-chevrons-down bx-chevrons-right");
            });
            });

            $(document).ready(function(){
            $("#click5").click(function(){

                $("#activity5").slideToggle("fast");
                $("i", this).toggleClass("bx-chevrons-down bx-chevrons-right");
            });
            });

            $(document).ready(function(){
            $("#click6").click(function(){

                $("#activity6").slideToggle("fast");
                $("i", this).toggleClass("bx-chevrons-right bx-chevrons-down");
            });
            });

            ClassicEditor
                .create( document.querySelector( '#editor1' ) )
                .catch( error => {
                    console.error( error );
                } );
                ClassicEditor
                .create( document.querySelector( '#editor2' ) )
                .catch( error => {
                    console.error( error );
                } );
                ClassicEditor
                .create( document.querySelector( '#editor3' ) )
                .catch( error => {
                    console.error( error );
                } );
                ClassicEditor
                .create( document.querySelector( '#editor4' ) )
                .catch( error => {
                    console.error( error );
                } );
                ClassicEditor
                .create( document.querySelector( '#editor5' ) )
                .catch( error => {
                    console.error( error );
                } );
                ClassicEditor
                .create( document.querySelector( '#editor6' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <script>

 $.ajax({

  url:"/api/activity",
  method:"GET",
  dataType:"json",
  success: (hasil) => {
      const panjang = hasil.length
      for(i=0; i < panjang; i++){
          $("#examples").append(
              `
              <tr>
                  <th scope="row"i>${ i + 1}</th>
                  <td>${ hasil[i].metode }</td>
                  <td>${ hasil[i].januari }</td>
                  <td>${ hasil[i].februari }</td>
                  <td>${ hasil[i].maret }</td>
                  <td>${ hasil[i].april }</td>
                  <td>${ hasil[i].mei }</td>
                  <td>${ hasil[i].juni }</td>
                  <td><a href='/api/activity/${hasil[i].learningactivity_id}'>edit </a>| </td>
                </tr>
              `
          )
      }
  }
})
  </script>
    </body>
</html>
