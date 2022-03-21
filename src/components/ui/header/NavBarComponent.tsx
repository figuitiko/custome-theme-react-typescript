import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'

const NavBarComponent = () => {
  const {menu} = useContext(AppContext);
  
  return (
    <nav className='hidden lg:block col-start-2 col-end-3 row-span-2'>
      <ul className='flex gap-2 justify-evenly'>
        {
         menu.map((item,idx)=>(
          <li key={idx} > <a className='text-main-color uppercase' href={item.link}>{item.title}</a></li>
         ))
        }
      </ul>
      </nav>
  )
}

export default NavBarComponent