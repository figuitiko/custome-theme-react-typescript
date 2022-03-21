import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'
import { CgMenu } from "react-icons/cg";
const MainBrandComponent = () => {
  const {headerLogo, baseUrlTheme, menu} = useContext(AppContext)
  return (
    <>
    <div className='lg:hidden flex justify-start items-center cursor-pointer col-start-1 row-start-1 z-10 group'>

    <CgMenu className='text-4xl'  />
    <nav className='col-start-1 row-start-2 place-items-end bg-slate-400 absolute top-14 transition-all scale-0 group-hover:scale-100  lg:hidden xl:hidden'>
      <ul>
        {
          menu.map((item,idx)=>(
            <li className='border-b-2 px-4' key={idx}><a className='text-main-color' href={item.link}>{item.title}</a></li>
          ))
        }
      </ul>
    </nav>
    </div>
    
    <div className='flex items-center  ml-[-1.5rem] col-start-2 row-start-1  lg:col-start-1 lg:row-start-1 lg:row-end-3'>
      <CgMenu className='hidden lg:block' />
      <picture className='py-4 px-2'>
        <a href='/'>

        <img src={!!headerLogo? headerLogo:`${baseUrlTheme}/img/logo.png`} />
        </a>
      </picture>
    </div>
    </>
    
  )
}

export default MainBrandComponent