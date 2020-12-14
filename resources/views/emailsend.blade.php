


    <form method="post" action="{{url('sendemail/send')}}" class="contform text-capitalize">
    {{ csrf_field() }}
        <div class="form-group ">
            <label for="name">name</label><br>
            <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email" class="form-control" placeholder="Your email">
        </div>
        <div>
            <label for="phone">Phone Number</label><br>
            <input type="text" name="phone" class="form-control" placeholder="Your Phone number">
        </div>
        <div>
            <label for="message">message</label><br>
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Enter text"></textarea>
        </div>
        <input type="submit" name="send" value="Send" class="btn-primary btn btnn btn-primary:hover">

    </form>

