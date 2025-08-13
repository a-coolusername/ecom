import './App.css'
import './index.css'
import Header from './components/header'
import Footer from './components/footer'
import Colour from './components/Colour/colour';
{/*import Food from './components/food'
import Card from './components/card'
import Button from './components/button/button'
import Car from './components/Car/car picker (update object)'*/}


function App() {
  return(
    <>
    <Header />
    {/* <Card title="monster"  instock={true}/>
    <Button />
    <Car /> */}
    <Colour />
    <Footer />
    </>
  );
}

export default App
