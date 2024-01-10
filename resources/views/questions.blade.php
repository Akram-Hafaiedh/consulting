
<style>
  .wrapper {
  margin: 0 auto;
  width: 90%;
}

.cards {
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards li {
  border: 2px solid #B598BD;
  border-radius:5px;
  background-color: #e2dbef;
  color: #000;
  flex: 1 1 200px;
}

.cards h2 {
  background-color: #B598BD;
  margin: 0;
  padding: 10px;
}

.cards p {
  padding: 10px;
}

.flex {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
}

.flex li {
  flex: 1 1 200px;
  margin: 10px;
}

.grid {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  /*grid-template-columns: repeat(auto-fill, minmax(200px 1fr));*/
  grid-gap: 20px;
}
btn-primary {
    display: block;
    width: 100%;
    padding: 15px;
    background-color: #B598BD;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
    margin-top: 10px;
}
.text-right {
    text-align: right;
    margin-top: 10px; /* Adjust margin as needed */
}

button:hover {
    background-color: #B598BD;
}

            </style>


        @extends('layouts.app')

        @section('title', 'Home')

        @section('content')
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class="text-right">
                    <a href="{{ route('question.create') }}" style=" display: block;
                    width: 15%;
                    padding: 5px;
                    background-color: #B598BD;
                    color: #fff;
                    border: none;
                    border-radius: 6px;
                    cursor: pointer;
                    font-size: 18px;
                    margin-top: 20px;" class="btn btn-primary">Créer un Question &nbsp; </a>
                </div>


                <br> <br>
                <div class="wrapper">

                    @foreach($questions as $question)

                  <ul class="flex cards">
                    <li><h2>{{ $question->title }}</h2>
                      <p> question : {{ $question->description }} ?
                      </p>
                      <p> réponse correcte :{{ $question->correct_answer }} ?
                    </p>

                    </li>

                  </ul>
                @endforeach

                  </div>
            </div>
        </div>
        @endsection

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-expander').click(function() {
              var $thisCell = $(this).closest('.card');

              if ($thisCell.hasClass('is-collapsed')) {
                $('.card').not($thisCell).removeClass('is-expanded').addClass('is-collapsed is-inactive');
                $thisCell.removeClass('is-collapsed').addClass('is-expanded');

                if ($('.card').not($thisCell).hasClass('is-inactive')) {
                  // do nothing
                } else {
                  $('.card').not($thisCell).addClass('is-inactive');
                }
              } else {
                $thisCell.removeClass('is-expanded').addClass('is-collapsed');
                $('.card').not($thisCell).removeClass('is-inactive');
              }
            });

            $('.js-collapser').click(function() {
              var $thisCell = $(this).closest('.card');
              $thisCell.removeClass('is-expanded').addClass('is-collapsed');
              $('.card').not($thisCell).removeClass('is-inactive');
            });
          });
        </script>
