import React from 'react'
import AboutWidgetComponent from '../components/ui/about/main/AboutWidgetComponent'
import MissionWidgetComponent from '../components/ui/about/mission/MissionWidgetComponent'

import AppContext from '../context/AppContext'
import AppContextInterface from '../interfaces/AppContextInterface'


const {Provider} = AppContext
const AboutScreen = ({aboutContent}:AppContextInterface) => {

  const contextValue:AppContextInterface ={
    aboutContent,
    baseUrlTheme: process.env.MIX_BASE_URL,
  } 
  const {baseUrlTheme} = contextValue;
 
  return (
    <Provider value={contextValue}>

      <div style={{background:`url(${baseUrlTheme}/img/about/about_pattern.png) center center/ cover no-repeat`}} className='flex flex-col '>
      <AboutWidgetComponent />
      <MissionWidgetComponent />
      </div>
    </Provider>
  )
}

export default AboutScreen