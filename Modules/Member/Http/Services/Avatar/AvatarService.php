<?php


namespace Modules\Member\Http\Services\Avatar;


use Symfony\Component\HttpFoundation\Request;

class AvatarService implements AvatarServiceInterface
{
    /**
     * @param Request $request
     * @param $inputName
     * @param $directoryName
     * @return mixed return the fileName of the stored file avatar
     */
    public function store(Request $request, $inputName, $directoryName)
    {
        $avatar = $request->file($inputName);
        $extension = $avatar->getClientOriginalExtension();
        if ($avatar->isValid()) {
            do {
                $nom = str_random(10) . '.' . $extension;
            } while (file_exists($directoryName . '/' . $nom));
        }

        $avatar = $avatar->move(public_path() . $directoryName, $nom);
        return $avatar->getFileName();
    }


    public function destroy(Avatar $avatar)
    {
        $avatar->removeAttachedFile();
        $avatar->destroy();
    }
}