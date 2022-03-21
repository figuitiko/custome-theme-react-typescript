import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../context/AppContext'

interface Props{
    imgUrl:string,
    link:string,
    isFooter?:boolean
}
const TopBarItemComponent = ({imgUrl,link, isFooter}:Props) => {
  const {baseUrlTheme} = useContext(AppContext)
  return (
    <picture className={`${!isFooter?'hidden':'block'} lg:block  `}>
        <a href={link} target="_blank">
               <img className={`${!isFooter?'min-w-[25px]':'min-w-[40px] lg:min-w-[25px]'} `} src={!!imgUrl? imgUrl:`${baseUrlTheme}/img/fb.png`} />
        </a>
    </picture>
  )
}

export default TopBarItemComponent