<h2>Adding things and showing flash message</h2>

@if(session('trip_title'))
<p style="color:red;" id="magicText">{{session('trip_title')}} has been added</p>
<script>
    let magicText = document.getElementById('magicText');
        setInterval(()=>{
        magicText.style.display = `none`;
        // magicText.style.visibility = "hidden";
    }, 3000);

    </script>
@else
<p>Please add a trip</p>
@endif
<form action="flash" method="POST">
    @csrf
    <input type="text" name="trip_title" placeholder="Enter trip title" /><br><br>
    <input type="number" name="trip_days" placeholder="Enter no of trip days" /><br><br>
    <input type="submit"/>
</form>


