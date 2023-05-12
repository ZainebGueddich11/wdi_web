
from flask import Flask, request, jsonify
import joblib
import numpy as np
import pickle
import os

app = Flask(__name__)
model = joblib.load("modelHealth.pkl")
modelKNN = joblib.load("modelKNN.pkl")


@app.route('/predict', methods=['POST','GET'])
def predict():
#     Récupérer les données envoyées par le client
    data = request.get_json()

#     # Extraire les valeurs des features nécessaires pour la prédiction
    feature1 = data['Physicians 2018']
    feature2 = data['Number of deaths']
    feature3 = data['PrevalenceofHIV.male(%ages15-24)2019']
    feature4 = data['CausedeathbyCommunicablediseases2019']
    feature5 = data['CausedeathbynonCommunicablediseases2019']
#

    test = np.array([[feature1, feature2, feature3, feature4, feature5]])
    prediction = model.predict(test)

# # Convert the prediction to a regular Python int
    prediction = prediction.item()

     # Return the prediction as the response
    response = {'prediction': prediction}
    return jsonify(response)
    
@app.route('/predictEnvironement', methods=['POST','GET'])
def predictEnvironement():
    #     Récupérer les données envoyées par le client
        data = request.get_json()

    #     # Extraire les valeurs des features nécessaires pour la prédiction
        feature1 = data['Renewable energy consumption  % of total final energy consumption 2018']
        feature2 = data['Renewable energy consumption  2019']
        feature3 = data['Renewable electricity output 2020' ]
        feature4 = data['CO2 Emissions (Thousand metric tons) 2019']
        feature5 = data['CO2 Emissions (Thousand metric tons) 2020']


    #

        test = np.array([[feature1, feature2, feature3, feature4, feature5]])
        prediction = modelKNN.predict(test)

    # # Convert the prediction to a regular Python int
        prediction = prediction.item()

         # Return the prediction as the response
        response = {'prediction': prediction}
        return jsonify(response)
if __name__ == '__main__':
    app.run(debug=True)
