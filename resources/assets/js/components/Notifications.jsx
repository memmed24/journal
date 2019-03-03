import React from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

const notTypes = [
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
];

const seenStyle = {
  backgroundColor: "#edf2fa"
}

export default class Notification extends React.Component {

  constructor() {
    super();
    this.state = {
      isDropDownOpen: false,
      isDropDownTouched: false,
      notifications: [],
      limit: 5
    }
    this.dropDown = React.createRef();
  }

  componentDidMount() {
    this.fetchNotifications();
  }

  fetchNotifications = async () => {
    const { data } = await axios.get(`/api/notifications?limit=${this.state.limit}`);
    this.setState({ notifications: data.notifications });
  }

  toggleDropDown = async () => {
    await this.setState({ isDropDownOpen: !this.state.isDropDownOpen });
    if(!this.state.isDropDownTouched && this.state.isDropDownOpen) {
      this.setState({isDropDownTouched: true});
      setTimeout(() => this.markNotificationsAsRead(), 2000);
    }
  }

  markNotificationsAsRead = () => {
    this.setState(state => {
      return {
        notifications: state.notifications.map(not => {
          return {...not, seen: 0}
        })
      }
    })
  }

  renderNotificationCount() {
    let content;
    this.state.notifications.length === 0 
      ? content = "You don't have any notification" 
      : content = `You have ${this.state.notifications.length} Notifications`;
    return <p>{content}</p>
  }

  renderContent() {
    return this.state.notifications.map(({id, notification_type, user, seen, created_at}) => (
      <div key={id} className="notifi__item" style={seen ? seenStyle : null}>
        <div className={notTypes[notification_type - 1]['class']}>
          <i className={notTypes[notification_type - 1]['icon']}></i>
        </div>
        <div className="content">
          <p>{user ? `${user.name} ${user.surname}` : null} {notTypes[notification_type - 1]['text']}</p>
          <span className="date">{created_at}</span>
        </div>
      </div>
    ))
  }

  render() {
    return (
      <React.Fragment>
        <div
          ref={this.dropDown}
          onClick={() => this.toggleDropDown()}
          className={`header-button-item has-noti js-item-menu ${this.state.isDropDownOpen 
          ? `show-dropdown ` 
          : null}`}>
          <i className="zmdi zmdi-notifications"></i>
          <div className="notifi-dropdown js-dropdown">
            <div className="notifi__title">
              {this.renderNotificationCount()}
            </div>
            {this.renderContent()}
            <div className="notifi__footer">
              <a href="#">All notifications</a>
            </div>
          </div>
        </div>
      </React.Fragment>
    )
  }
}

if (document.getElementById('notificationCenter')) {
  ReactDOM.render(<Notification />, document.getElementById('notificationCenter'));
}
