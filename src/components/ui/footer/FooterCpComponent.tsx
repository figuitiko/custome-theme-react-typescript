import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'

const FooterCpComponent = () => {
  const {footerData} = useContext(AppContext)
  return (
    <div className='py-8 border-t-0 lg:border-t-2 row-start-3 lg:row-start-2 flex justify-center lg:justify-start'>
      <span className='text-gray-500 text-xs md:text-sm lg:text-lg '>
        {
          footerData?.footerCp ? footerData?.footerCp : "CAS Auto, LLC, Copyright ©2022. All rights Reserved."
        }
        </span>
    </div>
  )
}

export default FooterCpComponent