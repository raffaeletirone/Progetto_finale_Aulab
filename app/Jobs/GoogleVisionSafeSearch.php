<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Queueable, SerializesModels, Dispatchable, InteractsWithQueue;
    private $article_image_id;


    /**
     * Create a new job instance.
     */
    public function __construct($article_image_id)
    {
        $this->article_image_id = $article_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i=Image::find($this->article_image_id);
        if(!$i){
            return;
        }
        $image=file_get_contents(storage_path('app/public/'.$i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
        $imageAnnotator = new ImageAnnotatorClient();
        $response=$imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();
        $safe=$response->getSafeSearchAnnotation();
        $adult=$safe->getAdult();
        $spoof=$safe->getSpoof();
        $medical=$safe->getMedical();
        $violence=$safe->getViolence();
        $racy=$safe->getRacy();
        $likelihoodName=[
        'text-secondary bi bi-circle-fill',
        'text-success bi bi-check-circle-fill',
        'text-success bi bi-check-circle-fill',
        'text-warning bi bi-exclamation-circle-fill',
        'text-warning bi bi-exclamation-circle-fill',
        'text-danger bi bi-dash-circle-fill',
        ];

        $i->adult=$likelihoodName[$adult];
        $i->spoof=$likelihoodName[$spoof];
        $i->medical=$likelihoodName[$medical];
        $i->violence=$likelihoodName[$violence];
        $i->racy=$likelihoodName[$racy];
        $i->save();
        
    }
}
