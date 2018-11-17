import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';
import Pagination from "react-js-pagination";
import Swal from 'sweetalert2-react';




export default class Document extends Component {

  constructor() {
    super();
    this.state = {
      data: [],
      url: 'http://localhost:8000/',
      activePage: 1,
      perPage: undefined,
      totalItems: undefined,
      pageRange: undefined,
      showDeletePopUp: false
    }
    this.fetchDocuments = this.fetchDocuments.bind(this);
    this.handlePageChange = this.handlePageChange.bind(this);
    this.handleChange = this.handleChange.bind(this);
    this.confirmDelete = this.confirmDelete.bind(this);
  }

  componentWillMount() {
    this.fetchDocuments(this.state.activePage);
  }

  fetchDocuments(page) {
    Axios.get(`/api/documents?page=${page}`).then(response => {
      this.setState({
        data: response.data.data,
        perPage: response.data.per_page,
        totalItems: response.data.total,
        pageRange: response.data.last_page
      });
    }).catch(error => {
      console.log(error);
    });
  }

  handleChange(id, event) {
    let value = event.target.value;
    event.target.defaultValue = value;
    Axios.post(`/api/update/document/${id}`, {
      status: value
    }).then(response => {
      console.log(response);
    }).catch(error => {
      console.log(error);
    });
  }

 

  handlePageChange(pageNumber) {
    this.setState({
      activePage: pageNumber
    });
    this.fetchDocuments(pageNumber);
  }

  handleDeletePopUp(id) {
    this.setState({
      showDeletePopUp: true,
      deletePopUpDocumentId:id
    });
  }

  confirmDelete(id) {
    Axios.get(`${this.state.url}api/delete/document/${id}`).then(response => {
      this.fetchDocuments(this.state.activePage);
      this.setState({
        showDeletePopUp: false,
      });
    }).catch(error => {
      console.log(error);
    });
  }

  render() {

    return (
      <div>
        <Swal
          type="warning"
          show={this.state.showDeletePopUp}
          title='Are you sure?'
          showCancelButton={true}
          cancelButtonColor='red'
          confirmButtonText='Yes, delete it!'
          onConfirm={this.confirmDelete.bind(this, this.state.deletePopUpDocumentId)}
        />


        {this.state.pageRange > 1 ? <Pagination
          activePage={this.state.activePage}
          itemsCountPerPage={this.state.perPage}
          totalItemsCount={this.state.totalItems}
          pageRangeDisplayed={this.state.pageRange}
          itemClass='page-item'
          linkClass='page-link'
          prevPageText='<'
          nextPageText='>'
          firstPageText='<<'
          lastPageText='>>'
          onChange={this.handlePageChange}
        /> : null}
        <table className="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">User</th>
              <th scope="col">Source</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            {this.state.data.map((document, i) => (


              <tr key={i}>
                <td>{document.id}</td>
                <td>{document.user ? `${document.user.name} ${document.user.surname} ` : ''}</td>
                <td>
                  <a target="_blank" href={`${this.state.url}documents/${document.source}`}>{document.source}</a>
                </td>
                <td>
                  <select className="form-control" onChange={this.handleChange.bind(this, document.id)} defaultValue={document.status}>
                    <option value="0" >Not read</option>
                    <option value="1" >Is reading</option>
                    <option value="2" >Done reading</option>
                  </select>
                </td>
                <td>
                  <button className="btn btn-sm btn-danger" onClick={this.handleDeletePopUp.bind(this, document.id)}>Delete</button>
                </td>
              </tr>
            )
            )}

          </tbody>

        </table>

      </div>

    );
  }
}

if (document.getElementById('example')) {
  ReactDOM.render(<Document />, document.getElementById('example'));
}
