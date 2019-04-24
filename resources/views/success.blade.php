@extends('layouts.app')

@section('content')
<v-card class="card" raised dark>
    <center>
        <v-sheet
        class="success-sheet"
        elevation="15"
        color="success"
        height="400px"
        width="100%">
        <h1 class="success-msg-large">Thank you for getting in touch!</h1><br>
        <v-spacer></v-spacer>
        <h3 class="success-msg-small">We will get back to you soon!</h3>
    </v-sheet>
    </center>
</v-card>
@endsection