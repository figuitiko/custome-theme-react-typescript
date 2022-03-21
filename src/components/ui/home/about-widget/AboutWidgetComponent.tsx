import React, { useEffect } from 'react'
import { useState } from 'react';
import { useContext } from 'react'
import AppContext from '../../../../context/AppContext'
import AboutWidgetBoxComponent from './AboutWidgetBoxComponent';

const AboutWidgetComponent = () => {
    const {baseUrlTheme, homeContent} = useContext(AppContext);
    const {aboutCareerWidget} = homeContent;
    const {aboutTitle, aboutSubtitle, aboutBtnText, aboutBtnLink, careerTitle, careerSubtitle, careerBtnText, careerBtnLink}= aboutCareerWidget;
    const mediaMatch = window.matchMedia('(max-width: 500px)');
    const [matches, setMatches] = useState(mediaMatch.matches);
    useEffect(() => {
    
        const handler = (e:MediaQueryListEvent) => setMatches(e.matches);
        mediaMatch.addEventListener("change", handler)
       
        return () => mediaMatch.removeEventListener("change",handler);
      });
      
      const styles = {
        container: (isMatch:boolean) => ({
        
         
          
          filter: 'saturate(5) grayscale(0.5) opacity(0.9)',
          background:`url(${!isMatch?`${baseUrlTheme}/img/home/bg_about.png`:`${baseUrlTheme}/img/home/bg_about_mobile.png`}) center center/ cover no-repeat `,
         
        })
      }
  return (
    <div style={styles.container(matches)} className='casautomotive-main-bg flex border-t-4 border-t-[#afd93b] border-b-4 border-b-[#afd93b] flex-col lg:flex-row justify-center items-center h-auto lg:h-screen backdrop-opacity-60 py-12 px-8 lg:px-60'>
        <AboutWidgetBoxComponent title={aboutTitle} subtitle={aboutSubtitle} btnLink={aboutBtnLink} btnText={aboutBtnText} isCareer={false} />
        <AboutWidgetBoxComponent title={careerTitle} subtitle={careerSubtitle} btnLink={careerBtnLink} btnText={careerBtnText} isCareer={true}  />
    </div>
  )
}

export default AboutWidgetComponent