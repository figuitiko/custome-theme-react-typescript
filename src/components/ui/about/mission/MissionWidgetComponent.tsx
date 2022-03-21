import React from 'react'
import { useContext } from 'react'
import AppContext from '../../../../context/AppContext'
import MissionMainComponent from './MissionMainComponent';
import MissionSecondaryComponent from './MissionSecondaryComponent';

const MissionWidgetComponent = () => {
  const {aboutContent, baseUrlTheme} = useContext(AppContext);
  const{missionWidget} = aboutContent;
  const { missionTitle, missionSubtitle, missionSubtitle2, btnText1, btnLink1, btnLink2, btnText2, featureImg } = missionWidget;

  return (
    <div>
      <MissionMainComponent title={missionTitle} subtitle={missionSubtitle} />
      <MissionSecondaryComponent imgUrl={featureImg} subtitle={missionSubtitle2} btnText1={btnText1} btnLink1={btnLink1} 
                                    btnText2={btnText2} btnLink2={btnLink2} />
    </div>
  )
}

export default MissionWidgetComponent