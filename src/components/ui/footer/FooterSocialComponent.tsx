import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'
import TopBarItemComponent from '../header/TopBarItemComponent';

const FooterSocialComponent = () => {
  const {topbar} = useContext(AppContext);
  const  {fbImg, fbLink, igImg, igLink, lnImg, lnLink, twImg, twLink} = topbar;
  return (
    <div className='flex   justify-center lg:justify-end  gap-3 p-4 mr-0 lg:mr-12 border-t-2 row-start-2'>
       <TopBarItemComponent imgUrl={fbImg} link={fbLink} isFooter={true}  />
       <TopBarItemComponent imgUrl={igImg} link={igLink} isFooter={true}/>
       <TopBarItemComponent imgUrl={lnImg} link={lnLink} isFooter={true}/>
       <TopBarItemComponent imgUrl={twImg} link={twLink} isFooter={true}/>
    </div>
  )
}

export default FooterSocialComponent