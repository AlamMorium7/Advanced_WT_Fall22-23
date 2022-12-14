import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';
  
class AxioPost extends Component {
    constructor(props)
    {
        super(props)
this.state={
    D_ID:'',
    DName:'',
    DPhone:'',
    Degree:'',
    DPassword:''
}
    }

changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
}
submitHandler = (e) =>{
    e.preventDefault()
    this.setState()
    console.log(this);
    axios.post('http://127.0.0.1:8000/api/doctorpost', this.state)
    .then(response=>{
console.log(response)
    })
.catch(error =>{
    console.log(error)
})
}
   

    render() {
      const {D_ID,DName,DPhone,Degree,DPassword}=this.state
        return (
            <div >
                <div><h2>Doctors Entry</h2></div>
                    <form onSubmit={this.submitHandler}>
                        <div> <input type="text" name="D_ID" value={D_ID} onChange={this.changeHandler}/></div>
                        <div> <input type="text" name="DName" value={DName}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="DPhone" value={DPhone}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="Degree" value={Degree}  onChange={this.changeHandler} /></div>
                        <div> <input type="text" name="DPassword" value={DPassword}  onChange={this.changeHandler} /></div>
                      

                        <div> <input type="submit" /></div>
                    </form>
                 
                </div>
           
        );
    }
}
  

export default AxioPost;



if (document.getElementById('axiopost')) {
    const Index = ReactDOM.createRoot(document.getElementById("axiopost"));

    Index.render(
        <React.StrictMode>
            <AxioPost/>
        </React.StrictMode>
    )
}
