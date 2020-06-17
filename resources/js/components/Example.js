import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        // <div className="container">
        //     <div className="row justify-content-center">
        //         <div className="col-md-8">
        //             <div className="card">
        //                 <div className="card-header">Example a Component</div>

        //                 <div className="card-body">I'm an example component!</div>
        //             </div>
        //         </div>
        //     </div>
        // </div>
        <h1>hello</h1>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
