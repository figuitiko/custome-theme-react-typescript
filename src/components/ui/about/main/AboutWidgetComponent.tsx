import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../../context/AppContext'

const AboutWidgetComponent = () => {

    const {aboutContent, baseUrlTheme} = useContext(AppContext);
    const {aboutWidget} = aboutContent;
    const {aboutTitle, aboutSubtitle, imageData1, imageData2, imageData3, imageData4} = aboutWidget;
    const transformTextAbout = ()=>{
        let aboutSubtitleTrans = aboutSubtitle.replace(/#/g, '<br>');
        return (
            <span className='font-thin text-[#929db3] text-xl lg:text-2xl block text-center px-0 lg:px-16' dangerouslySetInnerHTML={{__html: aboutSubtitleTrans}}></span>
        )
    }
  return (
    <div className='px-4 lg:px-60 flex flex-col items-center'>
        <h1 className='text-main-color text-4xl lg:text-6xl font-bold uppercase my-12 text-center '>{aboutTitle}</h1>
        {transformTextAbout()}
        <div className='grid grid-cols-1 lg:grid-cols-2 my-12 gap-4 '>
          <picture>
            <img className='w-full object-cover' src={!!imageData1? imageData1:`${baseUrlTheme}/img/about/bussiness.png`} />            
          </picture>
          <picture>
          <img className='w-full object-cover' src={!!imageData2? imageData2:`${baseUrlTheme}/img/about/operating.png`} />
          </picture>
          <picture>
            <img className='w-full object-cover' src={!!imageData3? imageData3:`${baseUrlTheme}/img/about/storage.png`} />
          </picture>
          <picture>
            <img className='w-full object-cover' src={!!imageData4? imageData4:`${baseUrlTheme}/img/about/vehicles.png`} />
          </picture>          </div>
    </div>
  )
}

export default AboutWidgetComponent