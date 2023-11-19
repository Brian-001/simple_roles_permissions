@extends('layouts.admin')

@section('content')

    <p>Welcome to Hotel Admin Dashboard. This is where all the dishes, tables, rooms are managed for this hotel</p>

    @if(session('success'))
        <script>
            // Display a Toastify notification for success message
            Toastify({
                text: "{{ session('success') }}",
                duration: 5000, // Duration in milliseconds (5 seconds)
                gravity: "top", // Position of the toast
                position: "center", // Position of the toast
                backgroundColor: "green", // Background color of the toast
                stopOnFocus: true, // Stop the toast when it is focused
            }).showToast();
        </script>
    @endif
    
@endsection
