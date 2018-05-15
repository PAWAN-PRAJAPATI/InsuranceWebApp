import React, { Component } from 'react';
import { Alert,AppRegistry,SectionList,FlatList, View,Text,TouchableHighlight,TextInput,Button,TouchableOpacity,StyleSheet } from 'react-native';



//Following class is being created to resuse thhe textinput with our costomized property. We will set its property which are constant throughout the project and dynamic property can be changed for....
class UselessTextInput extends Component {
    render() {
        return (
                <TextInput
                {...this.props} // Inherit any props passed to it; e.g., multiline, numberOfLines below
                editable = {true}
                maxLength = {40}
                autoCapitalize="none"
                />
        );
    }
}

var colors=["white"];
export default class UselessTextInputMultiline extends Component {
    constructor(props) {
        super(props);
        this.state = {
        text: 'white',
        pressStatus:false,
        colors:'white',
        background:'blue'
        };
    }
    _onHideUnderlay(){
        this.setState({ pressStatus: false });
    }
    _onShowUnderlay(){
        this.setState({ pressStatus: true });
    }
    _onPressButton() {
       color = this.state.text;
       colors.push(color.toString());
       Alert.alert('Success');
    }
    _setBackground(color){
        this.setState({background:color});
        colors.splice( colors.indexOf(color), 1 );
        Alert.alert(this.state.background.toString());
    }
    // If you type something in the text box that is a color, the background will change to that
    // color.
    render() {
        return (
                
                <View style={{
                    marginTop:50,
                    flex:1,
                    justifyContent: 'center',
                    alignItems: 'center',
                    borderBottomWidth: 1,
                    backgroundColor:this.state.background
                }}>
                <View style={{height:150,marginBottom:30}}>
                
                    <FlatList
                    style={{}}
                    data={colors}
                renderItem={({item}) => <TouchableOpacity style={{ borderRadius:10,width:100,height:15,margin:2, backgroundColor:item}} onPress={this._setBackground.bind(this,item)}></TouchableOpacity>}
                    />
                    </View>
                
                    <UselessTextInput
                        multiline = {true}
                        numberOfLines = {4}
                onChangeText={(text) => this.setState({text:text})}
                        value={this.state.text}/>
                
                    <TouchableHighlight
                        activeOpacity={1}
                        style={ this.state.pressStatus ? styles.buttonPress :
                        [styles.button,{backgroundColor:this.state.text}]}
                        onHideUnderlay={this._onHideUnderlay.bind(this)}
                        onShowUnderlay={this._onShowUnderlay.bind(this)}
                        onPress={this._onPressButton.bind(this)}>
                
                        <Text style={ this.state.pressStatus ? styles.welcomePress : styles.welcome }>{this.state.text}</Text>
                
                    </TouchableHighlight>
               
                </View>
        );
    }
}



const styles = StyleSheet.create({
                                 container: {
                                 flex: 1,
                                 justifyContent: 'center',
                                 alignItems: 'center',
                                 backgroundColor: '#F5FCFF',
                                 },
                                 welcome: {
                                 fontSize: 20,
                                 textAlign: 'center',
                                 margin: 10,
                                 color: 'white'
                                 },
                                 welcomePress: {
                                 fontSize: 20,
                                 textAlign: 'center',
                                 margin: 10,
                                 color: '#ffffff'
                                 },
                                 button: {
                                 borderColor: 'white',
                                 borderWidth: 1,
                                 borderRadius: 10,
                                 },
                                 buttonPress: {
                                 borderColor: '#000066',
                                 backgroundColor: '#000066',
                                 borderWidth: 1,
                                 borderRadius: 10,
                                 },
                                 });

