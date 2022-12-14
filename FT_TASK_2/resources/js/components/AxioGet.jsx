import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioGet extends Component {
  state = {
        posts: []
      }
    
      componentDidMount() {
        axios.get('http://127.0.0.1:8000/api/doctors/list')
        .then(response => {
          const posts = response.data;
          this.setState({posts});
         
        })
      }
   
        render(){
          return(
              <table class="table">
              <thead>
                  <tr class="bg-primary">
                      <th scope="col">D_ID</th>
                      <th scope="col">DName</th>
                      <th scope="col">DPhone</th>
                      <th scope="col">Degree</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.posts && this.state.posts.map(post => 
                      <tr>
                          <td scope="row">{post.D_ID}</td>
                          <td>{post.DName}</td>
                          <td>{post.DPhone}</td>
                          <td>{post.Degree}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default AxioGet;
  
if (document.getElementById('axioget')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget"));

  Index.render(
      <React.StrictMode>
          <AxioGet/>
      </React.StrictMode>
  )
}
