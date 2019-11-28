Hello This is the contacts Page
<form action="{{route('contact.store')}}" method="post">
   
   
   @csrf
    <label for="email">Email</label>
    <input type="text" name="name" />
    <input type="submit" />
    
    
</form>