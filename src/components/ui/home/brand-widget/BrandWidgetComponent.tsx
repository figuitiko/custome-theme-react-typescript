import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../../context/AppContext'
import BrandWidgetBoxComponent from './BrandWidgetBoxComponent';


const BrandWidgetComponent = () => {
    const {homeContent, baseUrlTheme} = useContext(AppContext);
    console.log(homeContent);
    const {brandWidget}= homeContent;
    const {mainTitleBrand, mainSubTitleBrand, brand1, brand2, brand3, brand4, linkBrand1, linkBrand2, linkBrand3, linkBrand4} = brandWidget;
    const style = {
        background:`url(${baseUrlTheme}/img/BGPattern.png) no-repeat center center`,
        backgroundSize:'cover'
    }
    
  return (
    <div style={style} className='my-8 flex flex-col px-8 lg:px-60 items-center py-8'>
        <h2 className='text-5xl font-bold text-[#20437D]  uppercase my-4'>{mainTitleBrand}</h2>
        <p className='text-[#929db3] w-2/3 text-center text-2xl my-8'>{mainSubTitleBrand}</p>
        <div className='flex gap-2 flex-wrap justify-center'>
            <BrandWidgetBoxComponent brand={brand1} link={linkBrand1}  />
            <BrandWidgetBoxComponent brand={brand2}  link={linkBrand2} />
            <BrandWidgetBoxComponent brand={brand3} link={linkBrand3} />
            <BrandWidgetBoxComponent brand={brand4} link={linkBrand4} />
        </div>
    </div>
  )
}

export default BrandWidgetComponent