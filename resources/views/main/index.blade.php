@extends('layouts.base')

@section('content')
<p id="description" class="description-center"><span class="texto-negro">thank you for taking the time to help the soccer improvine</span></p>
      <form action="{{route('create')}}" method="POST" id="survey-form">
        @csrf
        <div class="form-gruop">
          <label id="name-label" for="name">Name</label>
          <input id="name" name="name" type="text" placeholder="Enter you name" class="form-control" required></div>
          
        <div class="form-gruop">
          <label id="email-label" for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="Enter you email" class="form-control" required></div>
          
        <div class="form-gruop">
          <label id="number-label" for="number">Age<span class="clue">(optinal)</span></label>
          <input id="number" name="age" min="10" max="99" type="number" placeholder="Age" class="form-control" required></div>

        <div class="form-gruop">
          <p>choose your favorite team</p>
          <select id="dropdown" name="role" class="form-control" required>
            <option disabled selected value>select team</option>
            <option value="real-madird">Real Madrid</option>
            <option value="barcelona">Barcelona</option>
            <option value="man-united">Man.United</option>
            <option value="man-city">Man.City</option>
            <option value="bayern">Bayern</option> 
          </select>
        </div> 

        <div class="form-gruop">
          <p>Have you been to a game?</p>
          <label>
            <input name="user-recommend" value="game" type="radio" class="input-radio" checked/>Yes</label>
            
          <label>
            <input name="user-recommend" value="game" type="radio" class="input-radio"/>No</label>

         </div>

        <div class="form-gruop">
          <p>Which suggestions are good for the soccer to implement</p> 
          <select id="most-like" name="mostlike" class="form-control" required>
            <option disabled selected value>Select an Option</option>
            <option value="game">always be focused</option>
            <option value="game">more strategies in the field</option>
            <option value="game">cheapest tickets</option>
           </select> 
        </div>

        <div class="form-gruop">
         <p>What position do you play or would you like to play?</p>
         <label>
           <input name="prefer" value="forward" type="checkbox" class="input-checkbox" checked/>Forward</label>

           <label>
            <input name="prefer" value="midfield" type="checkbox" class="input-checkbox"/>Midfield
           </label>

           <label>
            <input name="prefer" value="defending" type="checkbox" class="input-checkbox"/>Defending
           </label>

           <label>
             <input name="prefer" value="goalkepeer" type="checkbox" class="input-checkbox"/>Goalkepeer
           </label>

        </div>

        <div class="form-group">
          <p>Any comments on improvements for your favorite team?</p>
          <textarea id="comments" name="comments" class="input-textarea" placeholder="Enter you comment here...">
          </textarea>
        </div>

        <div class="form-gruop">
          <button type="submit" id="submit" class="input-buttom">Submit</button>
        </div>
</form>

@endsection