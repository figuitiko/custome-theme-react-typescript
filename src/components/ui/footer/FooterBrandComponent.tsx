import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'

const FooterBrandComponent = () => {
    const {footerData, baseUrlTheme} = useContext(AppContext);
  return (
   <picture className='hidden lg:block'>
       <img src={!!footerData? footerData.footerLogo: `${baseUrlTheme}/img/logo-footer.png`} />
   </picture>
  )
}

export default FooterBrandComponent