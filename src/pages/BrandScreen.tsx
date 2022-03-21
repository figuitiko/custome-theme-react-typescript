import React from 'react'
import LeftImgBoxComponent from '../components/ui/brands/LeftImgBoxComponent';
import RightImgBoxComponent from '../components/ui/brands/RightImgBoxComponent';
import AppContext from '../context/AppContext'
import AppContextInterface from '../interfaces/AppContextInterface';

const {Provider} = AppContext;
const BrandScreen = ({brandContent}:AppContextInterface) => {
    const contextValue:AppContextInterface  ={
        brandContent,
        baseUrlTheme: process.env.MIX_BASE_URL,
    }
    const {baseUrlTheme} = contextValue;
    
    const {icon1,icon2,icon3,icon4, featureImg1, featureImg2,featureImg3, featureImg4,
            subtitle1, subtitle2, subtitle3,subtitle4, text1, text2, text3, text4,
            textLink1, textLink2, textLink3, textLink4} = brandContent;
            const icons = ['ShipMax', 'cas','cb','smax'];
            const [ShipMax,cas,cb,smax  ] = icons
  return (
      <Provider value={contextValue}>
        <div style={{background:`url(${baseUrlTheme}/img/about/about_pattern.png) center center/ cover no-repeat`}} className='flex flex-col px-4 md:px-40 lg:px-60'>
          <LeftImgBoxComponent featureImg={featureImg1} icon={icon1} title={text1} subtitle={subtitle1} link={textLink1} baseUrl={baseUrlTheme} textLink={textLink1} iconName={cas} />
            <RightImgBoxComponent featureImg={featureImg2} icon={icon2} title={text2} subtitle={subtitle2} link={textLink2} baseUrl={baseUrlTheme} textLink={textLink2} iconName={cb} />
            <LeftImgBoxComponent featureImg={featureImg3} icon={icon3} title={text3} subtitle={subtitle3} link={textLink3} baseUrl={baseUrlTheme} textLink={textLink3} iconName={smax} />
            <RightImgBoxComponent featureImg={featureImg4} icon={icon4} title={text4} subtitle={subtitle4} link={textLink4} baseUrl={baseUrlTheme} textLink={textLink4} iconName={ShipMax} />
        </div>
            
      </Provider>
  )
}

export default BrandScreen