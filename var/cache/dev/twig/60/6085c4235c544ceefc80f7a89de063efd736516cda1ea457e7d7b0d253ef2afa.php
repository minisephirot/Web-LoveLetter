<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_58012c3dc7a5560e8553a854aa2eea0deaab9bc108adf38b98c9f74b14727bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae57332fcdf03ba4b0d5306b8dd7322386ac94d010e36df73a2501c7a3d2ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae57332fcdf03ba4b0d5306b8dd7322386ac94d010e36df73a2501c7a3d2ceb->enter($__internal_7ae57332fcdf03ba4b0d5306b8dd7322386ac94d010e36df73a2501c7a3d2ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f147863a33185f54f4dd40ea71fe27b72217822f1991309e36a67ff284566a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f147863a33185f54f4dd40ea71fe27b72217822f1991309e36a67ff284566a85->enter($__internal_f147863a33185f54f4dd40ea71fe27b72217822f1991309e36a67ff284566a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7ae57332fcdf03ba4b0d5306b8dd7322386ac94d010e36df73a2501c7a3d2ceb->leave($__internal_7ae57332fcdf03ba4b0d5306b8dd7322386ac94d010e36df73a2501c7a3d2ceb_prof);

        
        $__internal_f147863a33185f54f4dd40ea71fe27b72217822f1991309e36a67ff284566a85->leave($__internal_f147863a33185f54f4dd40ea71fe27b72217822f1991309e36a67ff284566a85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
