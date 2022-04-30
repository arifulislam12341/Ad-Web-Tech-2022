import React, { Component } from "react";

class ShowMessage extends Component {
    constructor() {
        super()
        this.state = {
            message: 'Welcome To my Contact Page'
        }
    }
    changeMessage() {
        this.setState({
            message: 'Mail us:arifulmarfy@gmail.com'
        })
    }
    render() {
        return (
            <div>
                <h1>{this.state.message}</h1>
                <button onClick={() => this.changeMessage()}>Click</button>
            </div>
        )
    }

}

export default ShowMessage; 