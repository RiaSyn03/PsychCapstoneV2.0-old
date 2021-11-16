@extends('layouts.app')
@section('content')
<!-- <html>
    <head>
    </head>
    <style>
        
body {
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: sans-serif;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .custom-select {
    position: relative;
    display: inline-block;
    font-size: 14px;
    color: #888;
  }
  
  .custom-select select {
    display: block;
    width: 250px;
    min-height: 35px;
    background: #cbe7ff;
    border-radius: 3px;
    border: 2px solid #2196F3;
    outline: none;
    padding: 0 20px 0 10px;
    margin-top: 5px;
    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
  }
  
  .custom-select::after {
    content: '';
    border-width: 5px;
    border-style: solid;
    border-color: transparent;
    border-top-color: #222;
    display: inline-block;
    border-radius: 2px;
    position: absolute;
    right: 10px;
    bottom: 10px;
  }
  
  .custom-select .selector-options {
    list-style: none;
    padding: 5px 0;
    margin: 0;
    background: #11436b;
    color: #fff;
    border-radius: 4px;
    z-index: 1;
    width: 96%;
    position: absolute;
    left: 2%;
    top: 35%;
  }
  
  .custom-select .selector-options li {
    height: 35px;
    display: flex;
    align-items: center;
    padding: 0 15px;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  
  .custom-select .selector-options li:hover {
    background: #03A9F4;
  }
    </style> -->

    <body>
    <p id="appointmentDate"></p>
    @if(session('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
        <form method="post" action="stdnttime">
        @csrf
<label class="custom-select">
    Select from number options
    <select name="time">
        <optgroup>Morning</optgroup>
      <option value="9:00-10:00 AM">9:00-10:00 AM</option>
      <option value="10:00-11:00 AM">10:00-11:00 AM</option>
      <option value="11:00-12:00 PM">11:00-12:00 PM</option>
      <optgroup>Afternoon</optgroup>
      <option value="1:00-2:00 PM">1:00-2:00 PM</option>
      <option value="2:00-3:00 PM">2:00-3:00 PM</option>
      <option value="3:00-4:00 PM">3:00-4:00 PM</option>
    </select>
  </label>
  <button type="submit">Submit</button>
</form>
</body>
<script>
  
    const selector = document.querySelector('.custom-select');
    
    selector.addEventListener('change', e => {
      console.log('changed', e.target.value)
    })
    
    selector.addEventListener('mousedown', e => {
      if(window.innerWidth >= 420) {// override look for non mobile
        e.preventDefault();
        
        const select = selector.children[0];
        const dropDown = document.createElement('ul');
        dropDown.className = "selector-options";
        
        [...select.children].forEach(option => {
          const dropDownOption = document.createElement('li');
          dropDownOption.textContent = option.textContent;
          
          dropDownOption.addEventListener('mousedown', (e) => {
            e.stopPropagation();
            select.value = option.value;
            selector.value = option.value;
            select.dispatchEvent(new Event('change'));
            selector.dispatchEvent(new Event('change'));
            dropDown.remove();
          });
    
          dropDown.appendChild(dropDownOption);   
        });
    
        selector.appendChild(dropDown);
        
        // handle click out
        document.addEventListener('click', (e) => {
          if(!selector.contains(e.target)) {
            dropDown.remove();
          }
        });
      }
    });
    </script>
    
</html>
@endsection