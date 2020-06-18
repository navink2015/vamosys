import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Dutylist extends Component{
    render(){
    return (
        <div className="card container col-md-8" >
            <div className="card-title">Login</div> 
            <div className="card-body">
                <form>
                    <div className="form-group">
                        <label for="exampleInputEmail">E-mail address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"></input>
                    </div>
                    <div class="form-group">
                        <lable for="examplePassword">Password</lable>
                        <input type='text' class="form-control" id="examplePassword"></input>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"></input>
                        <label class="form-check-label" for="exampleCheck1">Remember password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
            
            
                
    );
}};



if (document.getElementById('log')) {
    ReactDOM.render(<Dutylist />, document.getElementById('log'));
}
