<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #DBC8FD;
    margin: 0;
    padding: 0;
}

.container {
    height: 100vh; /* Set container height to 100% of viewport height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start; /* Align form to the left */
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2{
    text-align: center;
    color: #6A0572;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    color: #6A0572;
    margin-bottom: 5px;
}

input,
select,
textarea {
    width: 400%; /* Adjusted width for better visibility */
    padding: 15px;
    box-sizing: border-box;
    border: 1px solid #6A0572;
    border-radius: 6px;
    font-size: 16px;
}

button {
    display: block;
    width: 100%;
    padding: 15px;
    background-color: #6A0572;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 18px;
    margin-top: 10px;
}

button:hover {
    background-color: #4C0256;
}

</style>

        @extends('layouts.app')

        @section('title', 'Home')

        @section('content')
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>

                <body>

                    <div class="container">
                        <h2>Create Quiz</h2>
    <form action="/storequiz" method="post">
        @csrf
        <div class="form-group">
            <label for="quizTitle">Quiz Title</label>
            <input type="text" id="quizTitle" name="title" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="type" required>
                <option value="">Select a category</option>
                <option value="Santé">Santé</option>
                <option value="Relation">Relation</option>
                <option value="Education">Education</option>
            </select>
        </div>
        <div class="form-group">
            <label for="duration">Duration (minutes)</label>
            <input type="number" id="duration" name="time" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="6" required></textarea>
        </div>
        <button type="submit">Create Quiz</button>
    </form>
                    </div>

                    </body>

            </div>
        </div>
        @endsection

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


