<style>
   body {
    font-family: 'Arial', sans-serif;
    background-color: #DBC8FD;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

h2 {
    color: #673AB7;
}

form {
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #673AB7;
}

textarea,
input ,
select{
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
}

button {
    background-color: #673AB7;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #5E35B1;
}

    </style>

            @extends('layouts.app')

            @section('title', 'Home')

            @section('content')
            <div class='dashboard-app'>
                <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
                <div class='dashboard-content'>

                    <body>
                        <div style="width: 80%; margin: auto; padding: 20px;">
                            <h2>Create a Question</h2>

                            <form  method="post" action="{{ route('storequestion') }}">
                                @csrf

                                <div style="margin-bottom: 15px;">
                                    <label for="question">Question:</label>
                                    <input type="text" id="question" name="title"  style="width: 100%;" required></textarea>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="question">Description:</label>
                                    <textarea id="question" name="description" rows="3" style="width: 100%;" required></textarea>
                                </div>



                                <div style="margin-bottom: 15px;">
                                    <label for="option1">Option 1:</label>
                                    <input type="text" id="option1" name="options[]" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="option2">Option 2:</label>
                                    <input type="text" id="option2" name="options[]" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="option3">Option 3:</label>
                                    <input type="text" id="option3" name="options[]" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label for="option3">Réponse Correcte:</label>
                                    <input type="text"  name="correct_answer" required>
                                </div>


                                <div style="margin-bottom: 15px;">
                                    <label for="option4">Choisir Quiz:</label>
                                    @foreach ($quizs as $quiz)
                                    <select name="quiz_id" required>
                                        <option value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                                    </select>
                                    @endforeach
                                </div>



                                <!-- You can add more options or fields as needed -->

                                <button type="submit" class="btn btn-primary">Create Question</button>
                            </form>
                        </div>

                    </body>

                </div>
            </div>
            @endsection

            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
