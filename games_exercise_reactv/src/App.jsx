import { useState } from 'react'
import ReactDOM from 'react-dom';
import reactLogo from './assets/react.svg'
import './App.css'
import { Game } from "./components/Game/Game"
import { List } from './components/List/List'

function Apps() {
  

  return (
    <div id="app" className="container">

    </div>
  )
}

export default Apps


class App extends React.Component {
  render() {
    return (
      <>
        <List
          url="http://www.cbp-exercises.test/day30/games_exercise/"
        />
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));