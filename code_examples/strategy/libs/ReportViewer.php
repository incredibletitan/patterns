<?php

namespace libs;

/**
 * Class ReportViewer
 *
 * @author Yuriy Stos
 */
class ReportViewer
{
    /**
     * Viewing specified file
     *
     * @param string $filePath - Path to file
     *
     * @throws \Exception - In case file extension not supported
     *
     * @return array - Data to view
     */
    public function view(string $filePath)
    {
        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);

        switch ($fileExtension) {
            case 'csv':
                $result = (new CSVParser())->parse(file_get_contents($filePath));
                break;
            case 'xml':
                $result = (new XmlParser())->parse(file_get_contents($filePath));
                break;
            default:
                throw new \Exception("Not supported file extension");
        }
        return $result;
    }
}
