import React, { useContext, useState } from 'react'
import AppContext from '../../../context/AppContext';
import TopBarItemComponent from './TopBarItemComponent';
import TopBarLanguageComponent from './TopBarLanguageComponent';


const TopBarComponent = () => {
    const {topbar, baseUrlTheme} = useContext(AppContext);
   const  {fbImg, fbLink, igImg, igLink, lnImg, lnLink, twImg, twLink} = topbar;
   const allLanguages = ['english', 'spanish'];
   const [language, setLanguage] = useState('english');
   const handleLanguage = (theLanguage:string)=>{
    setLanguage(theLanguage)
   }
  return (
    <div className='flex justify-end mt-2 gap-3 p-4 lg:mr-12 col-start-3 lg:col-start-2'>
       <TopBarItemComponent imgUrl={fbImg} link={fbLink} isFooter={false} />
       <TopBarItemComponent imgUrl={igImg} link={igLink} isFooter={false} />
       <TopBarItemComponent imgUrl={lnImg} link={lnLink} isFooter={false} />
       <TopBarItemComponent imgUrl={twImg} link={twLink} isFooter={false}/>
       <TopBarLanguageComponent language={language} allLanguages={allLanguages} handleLanguage={handleLanguage} baseUrl={baseUrlTheme}  />
    </div>
  )
}

export default TopBarComponent