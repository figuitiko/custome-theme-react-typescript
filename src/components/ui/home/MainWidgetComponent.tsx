import React from 'react'
import { useEffect } from 'react';
import { useState } from 'react';
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'


const MainWidgetComponent = () => {

  const {homeContent, baseUrlTheme} = useContext(AppContext);
  const mediaMatch = window.matchMedia('(max-width: 500px)');
  
  const [matches, setMatches] = useState(mediaMatch.matches);
  const {mainWidget} = homeContent;
  useEffect(() => {
    
    const handler = (e:MediaQueryListEvent) => setMatches(e.matches);
    mediaMatch.addEventListener("change", handler)
   
    return () => mediaMatch.removeEventListener("change",handler);
  });
  
  const styles = {
    container: (isMatch:boolean) => ({
    
     
      
      filter: 'saturate(5) grayscale(0.5) opacity(0.9)',
      background:`url(${!isMatch?`${baseUrlTheme}/img/home/bg-widget.png`:`${baseUrlTheme}/img/home/bg-widget-mobile.png`}) center center/ cover no-repeat `,
     
    })
  }
  const transformText = ()=>{

    let clearMainWidgetText = mainWidget.replace(/##/g, '</span>');
     clearMainWidgetText = clearMainWidgetText.replace(/#/g, '<span>');
     return (
      <h1 className="casautomotive-home text-4xl lg:text-7xl w-[80%] font-bold font-['Poppins'] uppercase text-center" dangerouslySetInnerHTML={{__html: clearMainWidgetText}}></h1>
     )
  }
  
  return (
    <div style={styles.container(matches)} className='casautomotive-main-bg flex justify-center items-center h-screen backdrop-opacity-60 px-8 lg:px-60'>
      {transformText()}
    </div>
  )
}

export default MainWidgetComponent