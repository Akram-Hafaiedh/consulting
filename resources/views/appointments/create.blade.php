@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="p-8">
                <h1 class="mb-4 text-2xl font-medium text-gray-900">Request an Appointment</h1>
                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="appointment_date" class="block mb-2 text-sm font-bold text-gray-700">Choose a
                            date:</label>
                        <input type="date" id="appointment_date" name="appointment_date" required
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="appointment_time" class="block mb-2 text-sm font-bold text-gray-700">Choose a
                            time:</label>
                        <input type="time" id="appointment_time" name="appointment_time" required
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-bold text-gray-700">Your message
                            (optional):</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                    </div>

                    <button type="submit"
                        class="px-4 py-2 font-bold text-white rounded bg-violet-500 hover:bg-violet-700 focus:outline-none focus:shadow-outline">
                        Submit Request
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
