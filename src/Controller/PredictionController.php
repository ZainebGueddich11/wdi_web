<?php

namespace App\Controller;

use App\Service\FlaskIntegrationService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Process\Process;

class PredictionController extends AbstractController
{
    /**
     * @Route("/prediction", name="app_prediction")
     */
    public function index(): Response
    {
        return $this->render('prediction/index.html.twig', [
            'controller_name' => 'PredictionController',
        ]);
    }

    /**
     * @Route("/predict", name="prediction", methods={"GET", "POST"})
     */
 /*   public function predictEnv(Request $request): Response
    {
        // Check if the form is submitted
        if ($request->isMethod('POST')) {
            // Get the input data from the form
            $inputData = json_encode([
                'Physicians 2018' => $request->request->get('Physicians2018'),
                'Number of deaths' => $request->request->get('Numberofdeaths'),
                'PrevalenceofHIV.male(%ages15-24)2019' =>$request->request->get('PrevalenceofHIVmale(ages15-24)2019'),
                'CausedeathbyCommunicablediseases2019' => $request->request->get('CausedeathbyCommunicablediseases2019'),
                'CausedeathbynonCommunicablediseases2019' => $request->request->get('CausedeathbynonCommunicablediseases2019')
            ]);
            // Execute the Flask application as a separate process
//           $process = new Process(['C:\Users\Lenovo\AppData\Local\Programs\Python\Python38\python.exe','test.py']);
            $process = new Process(['python test.py']);
            $process->setWorkingDirectory('C:\Users\Lenovo\Desktop\4BI1\semestre2\PI\wdi\src\Controller');
            $process->setInput($inputData);
            $process->run();

            // Get the predictions from the process output
            $predictions = json_decode($process->getOutput(), true);

            if (!$process->isSuccessful()) {
                // Get the output of the process

                // Display the process output in the console
                dump($process->getErrorOutput());
            }
            // Pass the predictions to the template
            return $this->render('prediction/result.html.twig', [
                'predictions' => $predictions,
            ]);
        }

        // Render the form template
        return $this->render('prediction/index.html.twig');
    }*/
    /**
     * @Route("/predict", name="prediction", methods={"GET", "POST"})
     */
    public function index1(Request $request,FlaskIntegrationService $flaskIntegrationService): Response
    {
        $data = [
            'Physicians 2018' => $request->request->get('Physicians2018'),
            'Number of deaths' => $request->request->get('Numberofdeaths'),
            'PrevalenceofHIV.male(%ages15-24)2019' =>$request->request->get('PrevalenceofHIVmale(ages15-24)2019'),
            'CausedeathbyCommunicablediseases2019' => $request->request->get('CausedeathbyCommunicablediseases2019'),
            'CausedeathbynonCommunicablediseases2019' => $request->request->get('CausedeathbynonCommunicablediseases2019')
            // Add more data fields as required
        ];

        $predictions = $flaskIntegrationService->executeFlaskAPI($data);

        // Process the predictions and return a response
        return $this->render('prediction/result.html.twig', ['predictions' => $predictions]);
    }
    /**
     * @Route("/predictEnvironement", name="predictEnvironement", methods={"GET", "POST"})
     */
    public function index2(Request $request,FlaskIntegrationService $flaskIntegrationService): Response
    {
        $data = [
            'Renewable energy consumption  % of total final energy consumption 2018' => $request->request->get('Renewableenergyconsumptionoftotalfinalenergyconsumption2018'),
            'Renewable energy consumption  2019' => $request->request->get('Renewableenergyconsumption2019'),
            'Renewable electricity output 2020' =>$request->request->get('Renewableelectricityoutput2020'),
            'CO2 Emissions (Thousand metric tons) 2019' => $request->request->get('CO2Emissions(Thousandmetrictons)2019'),
            'CO2 Emissions (Thousand metric tons) 2020' => $request->request->get('CO2Emissions(Thousandmetrictons)2020')
            // Add more data fields as required
        ];

        $predictions2 = $flaskIntegrationService->executeFlaskAPIEnvironement($data);

        // Process the predictions and return a response
        return $this->render('prediction/result2.html.twig', ['predictions2' => $predictions2]);
    }

}
