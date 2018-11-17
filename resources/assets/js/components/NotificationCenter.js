import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';
import Swal from 'sweetalert2-react';

export default class NotificationCenter extends Component {

  constructor() {
    super();
    this.state = {
      notifications: [],
      showRequestPopup: false,
      types: [
        {
          class: 'bg-c1 img-cir img-40',
          text: 'has uploaded new document',
          icon: "zmdi zmdi-file"
        },
        {
          class: 'bg-c2 img-cir img-40',
          text: 'wants to join',
          icon: "zmdi zmdi-account-o"
        }
      ],
      dropdown: false,
      friendRequestName: "",
      dropdownClass: "js-item-menu",
      seenStyle: {
        backgroundColor: "#edf2fa"
      }
    };

    this.fetchAllNotifications = this.fetchAllNotifications.bind(this);
    this.handleDropDown = this.handleDropDown.bind(this);
  }

  fetchAllNotifications(limit = null) {
    let url = limit != null ? `/api/notifications?limit=${limit}` : '/api/notifications';
    Axios.get(url).then(response => {
      this.setState({
        notifications: response.data.notifications,
        unseennotificationcount: response.data.unseen,
        dropdownClass: response.data.unseen >= 1 ? "has-noti js-item-menu" : "js-item-menu"
      });
    }).catch(error => { console.log(error) });
  }

  componentWillMount() {
    this.fetchAllNotifications(5);
  }

  handleDropDown() {
    this.setState({
      dropdown: !this.state.dropdown,
      dropdownClass: this.state.dropdown ? "js-item-menu" : 'show-dropdown js-item-menu',
      showRequestPopup: false
    });

    console.log("unseen " + this.state.unseennotificationcount);
    if (this.state.unseennotificationcount > 0) {
      this.markSeenAllNotifications();
      setTimeout(() => {
        this.state.notifications.map((notification) => {
          notification.seen = 1
        });
      }, 2000);
    }


  }

  handleFriendRequest(type, user = null) {
    // console.log(i  d);
    if (type == 2) {
      this.setState({
        friendRequestName: `Do you want to accept ${user.name}`,
        showRequestPopup: true,
        requestSender: user
      });
    }
  }

  confirmUser(user) {
    console.log(user);
  }

  markSeenAllNotifications() {
    let markedSeenNotifications = [];
    let ids = [];
    this.state.notifications.map((notification) => {
      notification.seen == 0 ? ids.push(notification.id) : null;
      markedSeenNotifications.push(notification)
    });
    this.setState({
      notifications: markedSeenNotifications
    });
    if (ids.length >= 1) {
      Axios.post('/api/update/notifications', {
        ids: ids
      }).then(response => {
      }).catch(error => {
        console.log(error);
      })
    }

  }

  clickable() {
    console.log("aa");
  }

  render() {
    console.log(this.state.showRequestPopup);
    return (
      <div className={this.state.dropdownClass} >

        <i className="zmdi zmdi-notifications" onClick={this.handleDropDown}></i>

        <div className="notifi-dropdown js-dropdown">

          <Swal
            type="warning"
            show={this.state.showRequestPopup}
            // show={this.state.showRequestPopup}
            title={this.state.friendRequestName}
            showCancelButton={true}
            cancelButtonColor='red'
            confirmButtonText='Yes!'
            html='<button class="btn btn-danger btn-sm"></button>'
            onConfirm={this.confirmUser.bind(this, this.state.requestSender)}
          />

          {this.state.notifications.map((notification, i) => (
            <div className="notifi__item" onClick={this.handleFriendRequest.bind(this, notification.notification_type, notification.user ? notification.user : null)} style={notification.seen == 0 ? this.state.seenStyle : null} key={i}>
              <div className={this.state.types[notification.notification_type - 1]['class']}>
                <i className={this.state.types[notification.notification_type - 1]['icon']}></i>
              </div>
              <div className="content">
                <p>{notification.user ? `${notification.user.name} ${notification.user.surname}` : ''} {this.state.types[notification.notification_type - 1]['text']}</p>
                <span className="date">{notification.created_at}</span>
              </div>
            </div>

          ))}


          <div className="notifi__footer">
            <a href="admin/notifications" >All notifications</a>
          </div>
        </div>
      </div>

    );
  }
}

if (document.getElementById('notificationCenter')) {
  ReactDOM.render(<NotificationCenter />, document.getElementById('notificationCenter'));
}
