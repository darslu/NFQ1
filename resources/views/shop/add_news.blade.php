@extends('layouts.master')
 
 @section('title')
Uzsakymas
@endsection

@section ('styles')

form {
  /* Just to center the form on the page */
  margin: left;
  width: 550px;
  /* To see the outline of the form */
  padding: 1em;
  border: 5px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* To make sure that all labels have the same size and are properly aligned */
  display: inline-block;
  width: 120px;
  text-align: right;
}

input, textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* To give the same size to all text fields */
  width: 300px;
  box-sizing: border-box;

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highlight on active elements */
  border-color: #000;
}

textarea {
  /* To properly align multiline text fields with their labels */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 5em;
}



button {
  /* This extra margin represent roughly the same space as the space
     between the labels and their text fields */
}

@endsection

 @section('content')


<form action="padeka" method="post">
    <div>
        <label for="name">Vardas:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="surname">Pavardė:</label>
        <input type="text" id="name" name="surname">
    </div>
    <!-- <div>
        <label for="mail">Elektroninis paštas:</label>
        <input type="email" id="mail" name="email">
    </div> -->
     <div>
        <label for="date">Tinkama data:</label>
        <input type="date" id="mail" name="date">
       </div>
     <div>
        <label for="time">Laikas:</label>
        <input type="time" id="mail" name="time">
    </div>
     <div>
        <label for="tel">Telefono Numeris:</label>
        <input type="tel" id="mail" name="tel_nr">
    </div>
      <div>
        <label for="adresas">Adresas:</label>
        <textarea id="adresas" name="adresas"></textarea>
    </div>
    <div>
        <label for="msg">Papildoma informacija:</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
   <button  type="submit" class="btn btn-success my-2 my-sm-0" >Užsakyti</button>
</form>

@endsection