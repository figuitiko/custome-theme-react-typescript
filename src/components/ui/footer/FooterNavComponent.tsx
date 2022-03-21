import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'

const FooterNavComponent = () => {
    const {menu} = useContext(AppContext);
  return (
    <ul className='flex flex-col lg:flex-row justify-center gap-8 lg:gap-0 lg:justify-evenly items-center lg:items-start mb-8 lg:mb-0 '>
        {
            menu.map((item,idx)=>(
                <li key={idx}><a className='text-main-color' href={item.link}>{item.title}</a></li>
            ))
        }
    </ul>
  )
}

export default FooterNavComponent