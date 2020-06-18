import React from 'react'
import ReactDOM from 'react-dom'

function Register(){
    return (<div class="container card">
         <div className="card-title">Register</div>
        <form>
        <div class="form-group">
        <lable>Name</lable>
        <input type="text" class="form-control"></input>
       </div>
       <div class="form-group">
        <lable>E-mail</lable>
        <input type="email" class="form-control"></input>
       </div>
       
       <div class="form-group">
            <lable for="examplePassword">Password</lable>
            <input type='text' class="form-control" id="examplePassword"></input>
        </div>

        <div class="form-group">
            <lable for="examplePassword">Confirm Password</lable>
            <input type='text' class="form-control" id="examplePassword"></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>);
}

export default Register;

if (document.getElementById('reg')) {
    ReactDOM.render(<Register />, document.getElementById('reg'));
}

